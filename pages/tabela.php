<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>Tabela</title>
  <style>
    :root {
      --russian-violet: hsl(269, 36%, 22%);
      --dark-purple: hsl(268, 22%, 15%);
      --eerie-black: hsl(240, 4%, 10%);
      --davys-gray: hsl(0, 0%, 34%);
      --light-gray: hsl(0, 0%, 84%);
      --cultured-1: hsl(0, 0%, 98%);
      --cultured-2: hsl(280, 14%, 96%);
      --cultured-3: hsl(280, 9%, 94%);
      --gainsboro: hsl(0, 1%, 85%);
      --black_10: hsla(0, 0%, 0%, 0.1);
      --black_5: hsla(0, 0%, 0%, 0.05);
      --pumpkin: hsl(22, 90%, 56%);
      --white: hsl(0, 0%, 100%);
      --black: hsl(0, 0%, 0%);
    }

    body {
      font-family: Arial, sans-serif;
      background-color: var(--cultured-1);
      margin: 0;
      padding: 0;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 800px;
      margin: 30px auto;
      font-size: 16px;
      color: var(--davys-gray);
    }

    th, td {
      text-align: center;
      padding: 12px;
      border-bottom: 1px solid var(--cultured-2);
    }

    th {
      background-color: var(--russian-violet);
      color: var(--white);
      font-weight: bold;
    }

    tr:nth-child(even) {
      background-color: var(--cultured-2);
    }

    tr:nth-child(odd) {
      background-color: var(--cultured-3);
    }

    tbody tr:hover {
      background-color: var(--gainsboro);
      cursor: pointer;
    }

    @media only screen and (max-width: 600px) {
      table {
        font-size: 14px;
      }

      th, td {
        padding: 10px;
      }
    }
  </style>

</head>

<body style="padding-top: 150px;"> <!-- Adicionei padding-top caso o header seja fixo -->
  <header class="header" data-header>
    <div class="container">

      <a href="/" class="logo">LHVR ESPORTES</a>

      <nav class="navbar" data-navbar>
       <ul class="navbar-list container">
                  <li><a href="/pages/resultado.html" class="navbar-link active" data-nav-link>Resultado</a></li>
                  <li><a href="/pages/grupos.HTML" class="navbar-link" data-nav-link>grupos</a></li>
                  <li><a href="/pages/artilheiro.html" class="navbar-link" data-nav-link>artilheiros</a></li>
                  <li><a href="/pages/campeonatos.html" class="navbar-link" data-nav-link>Campeonatos	</a></li>
                  <li><a href="https://instagram.com/lhvr_esportes?igshid=YmMyMTA2M2Y="	class="btn btn-primary">Instagram</a></li>
              </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>

  <table>
    <thead>
			<tr>
				<th>Posição</th>
				<th>Time</th>
				<th>Pontos</th>
				<th>Jogos</th>
				<th>Vitórias</th>
				<th>Empates</th>
				<th>Derrotas</th>
				<th>Gols Pró</th>
				<th>Gols Solfridos</th>
				<th>Saldo de Gols</th>
			</tr>
		</thead>
        <tbody>
  <?php
    $db = new SQLite3('banco.db');
    $result = $db->query("SELECT * FROM classificacao ORDER BY pontos DESC");

    while ($row = $result->fetchArray()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['time']}</td>
                <td>{$row['pontos']}</td>
                <td>{$row['jogos']}</td>
                <td>{$row['vitorias']}</td>
                <td>{$row['empates']}</td>
                <td>{$row['derrotas']}</td>
                <td>{$row['gols_pro']}</td>
                <td>{$row['gols_sofridos']}</td>
                <td>{$row['saldo']}</td>
              </tr>";
    }
  ?>
</tbody>

  </table>

  


  <!--===== MAIN JS =====-->
  <script src="/js/cs.js" defer></script> 

	<!-- 
	  - ionicon link
	-->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</body>
</html>
