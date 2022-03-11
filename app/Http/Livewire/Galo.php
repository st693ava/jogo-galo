<?php
namespace App\Http\Livewire;

use Livewire\Component;

class Galo extends Component
{
	public $jogador;
	public $vencedor;

	public $jogadas = null;
	public $total_jogadas;

	public function selecionar($x, $y)
	{
		if ($this->jogadas[$x][$y] == null) {
			$this->jogadas[$x][$y] = $this->jogador;

			$this->verifica_vencedor();

			if ($this->jogador == 1) {
				$this->jogador = 2;
			} else {
				$this->jogador = 1;
			}

			$this->total_jogadas = $this->total_jogadas + 1;
		}
	}

	public function mount()
	{
		$this->jogador = 1;
		$this->vencedor = null;
		$this->total_jogadas = 0;

		$this->jogadas = [
			'0' => [
				'0' => null,
				'1' => null,
				'2' => null,
			],
			'1' => [
				'0' => null,
				'1' => null,
				'2' => null,
			],
			'2' => [
				'0' => null,
				'1' => null,
				'2' => null,
			]
		];
	}

	public function recomecar()
	{
		$this->jogador = 1;
		$this->vencedor = null;
		$this->total_jogadas = 0;

		$this->jogadas = [
			'0' => [
				'0' => null,
				'1' => null,
				'2' => null,
			],
			'1' => [
				'0' => null,
				'1' => null,
				'2' => null,
			],
			'2' => [
				'0' => null,
				'1' => null,
				'2' => null,
			]
		];
	}

	public function verifica_vencedor()
	{
		// VERIFICA LINHAS
		if (($this->jogadas[0][0] == $this->jogador) and ($this->jogadas[0][1] == $this->jogador) and ($this->jogadas[0][2] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		if (($this->jogadas[1][0] == $this->jogador) and ($this->jogadas[1][1] == $this->jogador) and ($this->jogadas[1][2] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		if (($this->jogadas[2][0] == $this->jogador) and ($this->jogadas[2][1] == $this->jogador) and ($this->jogadas[2][2] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		// VERIFICA Colunas
		if (($this->jogadas[0][0] == $this->jogador) and ($this->jogadas[1][0] == $this->jogador) and ($this->jogadas[2][0] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		if (($this->jogadas[0][1] == $this->jogador) and ($this->jogadas[1][1] == $this->jogador) and ($this->jogadas[2][1] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		if (($this->jogadas[0][2] == $this->jogador) and ($this->jogadas[1][2] == $this->jogador) and ($this->jogadas[2][2] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		// Verifica na diagonal
		if (($this->jogadas[0][0] == $this->jogador) and ($this->jogadas[1][1] == $this->jogador) and ($this->jogadas[2][2] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}

		if (($this->jogadas[0][2] == $this->jogador) and ($this->jogadas[1][1] == $this->jogador) and ($this->jogadas[2][0] == $this->jogador)) {
			$this->vencedor = $this->jogador;
		}
	}

	public function render()
	{
		return view('livewire.galo');
	}
}
