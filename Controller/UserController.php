<?php
class UserController {
    public function index() {
        global $db;

        try {
            $stmt = $db->query("SELECT * FROM users");
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
