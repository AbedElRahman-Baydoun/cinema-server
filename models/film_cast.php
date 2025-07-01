<?php
require_once("Model.php");

class FilmCast extends Model {

    protected static string $table = "film_cast";

    protected ?int $id = null;
    protected int $film_id;
    protected int $actor_id;
    protected ?string $role_name = null;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->film_id = $data['film_id'];
        $this->actor_id = $data['actor_id'];
        $this->role_name = $data['role_name'] ?? null;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getFilmId(): int {
        return $this->film_id;
    }

    public function getActorId(): int {
        return $this->actor_id;
    }

    public function getRoleName(): ?string {
        return $this->role_name;
    }

    public function setFilmId(int $film_id): void {
        $this->film_id = $film_id;
    }

    public function setActorId(int $actor_id): void {
        $this->actor_id = $actor_id;
    }

    public function setRoleName(?string $role_name): void {
        $this->role_name = $role_name;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'film_id' => $this->film_id,
            'actor_id' => $this->actor_id,
            'role_name' => $this->role_name
        ];
    }
}