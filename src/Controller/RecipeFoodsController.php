<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecipeFoods Controller
 *
 * @property \App\Model\Table\RecipeFoodsTable $RecipeFoods
 */
class RecipeFoodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recipes', 'Foods']
        ];
        $recipeFoods = $this->paginate($this->RecipeFoods);

        $this->set(compact('recipeFoods'));
        $this->set('_serialize', ['recipeFoods']);
    }

    /**
     * View method
     *
     * @param string|null $id Recipe Food id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipeFood = $this->RecipeFoods->get($id, [
            'contain' => ['Recipes', 'Foods']
        ]);

        $this->set('recipeFood', $recipeFood);
        $this->set('_serialize', ['recipeFood']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipeFood = $this->RecipeFoods->newEntity();
        if ($this->request->is('post')) {
            $recipeFood = $this->RecipeFoods->patchEntity($recipeFood, $this->request->data);
            if ($this->RecipeFoods->save($recipeFood)) {
                $this->Flash->success(__('The recipe food has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipe food could not be saved. Please, try again.'));
            }
        }
        $recipes = $this->RecipeFoods->Recipes->find('list', ['limit' => 200]);
        $foods = $this->RecipeFoods->Foods->find('list', ['limit' => 200]);
        $this->set(compact('recipeFood', 'recipes', 'foods'));
        $this->set('_serialize', ['recipeFood']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipe Food id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipeFood = $this->RecipeFoods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipeFood = $this->RecipeFoods->patchEntity($recipeFood, $this->request->data);
            if ($this->RecipeFoods->save($recipeFood)) {
                $this->Flash->success(__('The recipe food has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipe food could not be saved. Please, try again.'));
            }
        }
        $recipes = $this->RecipeFoods->Recipes->find('list', ['limit' => 200]);
        $foods = $this->RecipeFoods->Foods->find('list', ['limit' => 200]);
        $this->set(compact('recipeFood', 'recipes', 'foods'));
        $this->set('_serialize', ['recipeFood']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipe Food id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipeFood = $this->RecipeFoods->get($id);
        if ($this->RecipeFoods->delete($recipeFood)) {
            $this->Flash->success(__('The recipe food has been deleted.'));
        } else {
            $this->Flash->error(__('The recipe food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
