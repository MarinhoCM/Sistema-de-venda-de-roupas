<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vendedores Controller
 *
 */
class VendedoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Vendedores->find();
        $vendedores = $this->paginate($query);

        $this->set(compact('vendedores'));
    }

    /**
     * View method
     *
     * @param string|null $id Vendedore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendedore = $this->Vendedores->get($id, contain: []);
        $this->set(compact('vendedore'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendedore = $this->Vendedores->newEmptyEntity();
        if ($this->request->is('post')) {
            $vendedore = $this->Vendedores->patchEntity($vendedore, $this->request->getData());
            if ($this->Vendedores->save($vendedore)) {
                $this->Flash->success(__('The vendedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendedore could not be saved. Please, try again.'));
        }
        $this->set(compact('vendedore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendedore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendedore = $this->Vendedores->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendedore = $this->Vendedores->patchEntity($vendedore, $this->request->getData());
            if ($this->Vendedores->save($vendedore)) {
                $this->Flash->success(__('The vendedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendedore could not be saved. Please, try again.'));
        }
        $this->set(compact('vendedore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendedore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendedore = $this->Vendedores->get($id);
        if ($this->Vendedores->delete($vendedore)) {
            $this->Flash->success(__('The vendedore has been deleted.'));
        } else {
            $this->Flash->error(__('The vendedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
