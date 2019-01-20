<?php

namespace Todo;
class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
    {
        $query = "INSERT INTO todos (title, created)
                  VALUES ('$title', CURRENT_TIMESTAMP)";

        self::$db->query($query);
        self::$db->bind(':title', $title);
        
        $result = self::$db->execute();

        return $result;
    }

    public static function updateTodo($todoId, $title, $completed = null)
    {
        $query = "UPDATE todos 
                  SET title = '$title', completed = '$completed' 
                  WHERE id = '$todoId'";

        self::$db->query($query);
        self::$db->bind(':id', $todoId);
        self::$db->bind(':title', $title);
        self::$db->bind(':completed', $ompleted);
        
        $result = self::$db->execute();

        return $result;
    }

    public static function deleteTodo($todoId)
    {
        $query = "DELETE FROM todos 
                  WHERE id = '$todoId'";

        self::$db->query($query);
        self::$db->bind(':id', $todoId);
        
        $result = self::$db->execute();

        return $result;
    }
}
