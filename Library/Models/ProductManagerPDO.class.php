<?php
    namespace Library\Models;

    class ProductManagerPDO extends ProductManager {
        public function list() {
            $requete = $this->dao->prepare("SELECT * FROM tblproduct");
            $requete->execute();
            return $requete->fetchAll();
        }
    }