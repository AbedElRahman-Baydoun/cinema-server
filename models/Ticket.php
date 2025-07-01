<?php
require_once("Model.php");

class Ticket extends Model {

    protected static string $table = "tickets";

    protected ?int $id = null;
    protected ?int $booking_id = null;
    protected int $user_id;
    protected int $seat_id;
    protected int $showtime_id;
    protected float $price;
    protected string $ticket_status;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->booking_id = $data['booking_id'] ?? null;
        $this->user_id = $data['user_id'];
        $this->seat_id = $data['seat_id'];
        $this->showtime_id = $data['showtime_id'];
        $this->price = (float) ($data['price'] ?? 0);
        $this->ticket_status = $data['ticket_status'] ?? 'booked';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getBookingId(): ?int {
        return $this->booking_id;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public function getSeatId(): int {
        return $this->seat_id;
    }

    public function getShowtimeId(): int {
        return $this->showtime_id;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getTicketStatus(): string {
        return $this->ticket_status;
    }

    public function setBookingId(?int $booking_id): void {
        $this->booking_id = $booking_id;
    }

    public function setUserId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setSeatId(int $seat_id): void {
        $this->seat_id = $seat_id;
    }

    public function setShowtimeId(int $showtime_id): void {
        $this->showtime_id = $showtime_id;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function setTicketStatus(string $status): void {
        $this->ticket_status = $status;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'booking_id' => $this->booking_id,
            'user_id' => $this->user_id,
            'seat_id' => $this->seat_id,
            'showtime_id' => $this->showtime_id,
            'price' => $this->price,
            'ticket_status' => $this->ticket_status
        ];
    }
}