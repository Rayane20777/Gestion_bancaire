<?php

    interface IService {
        function insert(User $user);
        function delete($id);
        function display();
        
    }

?>