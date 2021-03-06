<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Profiles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['People', 'Profiles', 'Clients', 'Employees']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('inPlanet');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $people = $this->Users->People->find('list', ['limit' => 200]);
        $profiles = $this->Users->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'people', 'profiles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $people = $this->Users->People->find('list', ['limit' => 200]);
        $profiles = $this->Users->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'people', 'profiles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
   
    public function login(){
            $this->viewBuilder()->setLayout('inPlanetLo');
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                    if($user['profile_id']===1){
                    return $this->redirect(['controller' => 'pages', 'action' => 'admin' ]);
                    }
                    if($user['profile_id']===2){
                    return $this->redirect(['controller' => 'pages', 'action' => 'employee' ]);
                    }
                    if($user['profile_id']===3){
                    return $this->redirect(['controller' => 'pages', 'action' => 'client' ]);
                    }
                //return $this->redirect(['controller' => 'options']);
            }
            // Bad Login
            $this->Flash->error('Incorrect Login');
        }
    }
     public function logout(){
         $this->Flash->success('You are logged out');
         return $this->redirect($this->Auth->logout());
    }
    
   public function register(){
        $user = $this->People->newEntity();
        if($this->request->is('post')){
            $user = $this->People->patchEntity($user, $this->request->data);
            if($this->People->save($user)){
                $this->Flash->success('You are registered and can login');
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error('You are not registered');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialzie', ['user']);
    }
    public function beforeFilter(Event $event){
        $this->Auth->allow(['registry']);
    }
   public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        // Login Check
        if($this->request->session()->read('Auth.User')){
             $this->set('loggedIn', true);   
        } else {
            $this->set('loggedIn', false); 
        }
    }
}
