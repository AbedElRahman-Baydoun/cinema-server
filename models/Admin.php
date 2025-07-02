<?php
require_once("Model.php");

class Admin extends Model {

    protected static string $table = "admins";

    protected ?int $id = null;
    protected int $user_id;
    protected string $role;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->user_id = $data['user_id'];
        $this->role = $data['role'] ?? 'admin';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function setUserId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'role' => $this->role
        ];
    }
}