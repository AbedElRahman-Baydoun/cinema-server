<?php
require_once 'Model.php';

class User extends Model {
    protected ?int $id = null;
    protected string $name = '';
    protected string $email = '';
    protected string $mobile_number = '';
    protected string $password = '';
    protected ?int $age = null;
    protected string $favorite_genre = '';
    protected string $communication_preference = 'email';

    protected static string $table = 'users';

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->mobile_number = $data['mobile_number'] ?? '';
        $this->password = $data['password'] ?? '';
        $this->age = isset($data['age']) ? (int) $data['age'] : null;
        $this->favorite_genre = $data['favorite_genre'] ?? '';
        $this->communication_preference = $data['communication_preference'] ?? 'email';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getMobileNumber(): string {
        return $this->mobile_number;
    }

    public function getAge(): ?int {
        return $this->age;
    }

    public function getFavoriteGenre(): string {
        return $this->favorite_genre;
    }

    public function getCommunicationPreference(): string {
        return $this->communication_preference;
    }

    public function setName(string $name): void {
        $this->name = trim($name);
    }

    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Invalid email address.");
        }
        $this->email = strtolower(trim($email));
    }

    public function setMobileNumber(string $mobile): void {
        $this->mobile_number = trim($mobile);
    }

    public function setPassword(string $password): void {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function setAge(?int $age): void {
        $this->age = $age;
    }

    public function setFavoriteGenre(string $genre): void {
        $this->favorite_genre = trim($genre);
    }

    public function setCommunicationPreference(string $preference): void {
        $valid = ['email', 'sms', 'none'];
        if (!in_array($preference, $valid)) {
            throw new InvalidArgumentException("Invalid communication preference.");
        }
        $this->communication_preference = $preference;
    }
        public function toDB(): array {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'mobile_number' => $this->mobile_number,
            'password' => $this->password,
            'age' => $this->age,
            'favorite_genre' => $this->favorite_genre,
            'communication_preference' => $this->communication_preference,
        ];
    }
}