<?php

use Todo\Controller;
use Todo\Database;
use Todo\TodoItem;

class TodoController extends Controller {
    
    public function get()
    {
        $todos = TodoItem::findAll();
        return $this->view('index', ['todos' => $todos]);
    }

    public function add()
    {
        $body = filter_body();
        $result = TodoItem::createTodo($body['title']);

        if ($result) {
          $this->redirect('/');
        }
    }

    public function update($urlParams)
    {
        $body = filter_body();
        $todoId = $urlParams['id'];
        $completed = isset($body['status']) ? 'true' : 'false';

        $result = TodoItem::updateTodo($todoId, $body['title'], $completed);
        if ($result) {
          $this->redirect('/');
        }
        
    }

    public function delete($urlParams)
    {
      $result = TodoItem::deleteTodo($urlParams['id']);
      
      if ($result) {
        $this->redirect('/');
      }
    }
}
