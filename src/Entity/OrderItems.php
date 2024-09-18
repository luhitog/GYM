<?php

namespace App\Entity;

use App\Repository\OrderItemsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderItemsRepository::class)]
class OrderItems
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $order_id = null;

    #[ORM\Column(length: 255)]
    private ?string $user_name = null;

    #[ORM\Column(length: 255)]
    private ?string $method_pay = null;

    #[ORM\Column]
    private ?int $shopping_adrees_id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $billing_adrees_id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $status_order = null;

    #[ORM\Column]
    private ?int $cost_total = null;

    #[ORM\Column]
    private ?int $cart_id = null;

    #[ORM\Column]
    private ?int $product_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getOrderId(): ?int
    {
        return $this->order_id;
    }

    public function setOrderId(int $order_id): static
    {
        $this->order_id = $order_id;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): static
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getMethodPay(): ?string
    {
        return $this->method_pay;
    }

    public function setMethodPay(string $method_pay): static
    {
        $this->method_pay = $method_pay;

        return $this;
    }

    public function getShoppingAdreesId(): ?int
    {
        return $this->shopping_adrees_id;
    }

    public function setShoppingAdreesId(int $shopping_adrees_id): static
    {
        $this->shopping_adrees_id = $shopping_adrees_id;

        return $this;
    }

    public function getBillingAdreesId(): ?string
    {
        return $this->billing_adrees_id;
    }

    public function setBillingAdreesId(string $billing_adrees_id): static
    {
        $this->billing_adrees_id = $billing_adrees_id;

        return $this;
    }

    public function getStatusOrder(): ?string
    {
        return $this->status_order;
    }

    public function setStatusOrder(string $status_order): static
    {
        $this->status_order = $status_order;

        return $this;
    }

    public function getCostTotal(): ?int
    {
        return $this->cost_total;
    }

    public function setCostTotal(int $cost_total): static
    {
        $this->cost_total = $cost_total;

        return $this;
    }

    public function getCartId(): ?int
    {
        return $this->cart_id;
    }

    public function setCartId(int $cart_id): static
    {
        $this->cart_id = $cart_id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): static
    {
        $this->product_id = $product_id;

        return $this;
    }
}
