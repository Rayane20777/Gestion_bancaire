<?php

    interface IService {
        function insert(Transaction $transaction);
        function delete($id);
        function display();
        
    }

?>