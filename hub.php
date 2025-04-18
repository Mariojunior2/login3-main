<?php
// File: inicio.php
// Substitua estes arrays por consultas ao banco de dados reais
$upcomingEvents = [
    ['id'=>1,'title'=>'Entrega do Trabalho Final','subject'=>'Programação Web','date'=>'Hoje, 23:59','type'=>'deadline','priority'=>'high'],
    ['id'=>2,'title'=>'Prova Bimestral','subject'=>'Banco de Dados','date'=>'Amanhã, 10:00','type'=>'exam','priority'=>'medium'],
    ['id'=>3,'title'=>'Lista de Exercícios 3','subject'=>'Algoritmos Avançados','date'=>'Sexta, 18:00','type'=>'homework','priority'=>'low'],
];

$activeMatches = [
    ['id'=>1,'name'=>'Ana Paula','username'=>'anapaula','avatar'=>'https://i.pravatar.cc/150?img=5','status'=>'online','lastMessage'=>'Oi! Vi que você também curte IA. Conhece o GPT-4?','time'=>'5m','unread'=>2],
    ['id'=>2,'name'=>'Carlos Eduardo','username'=>'carlosedu','avatar'=>'https://i.pravatar.cc/150?img=8','status'=>'offline','lastMessage'=>'Vamos marcar aquele café para conversar sobre o projeto?','time'=>'1h','unread'=>0],
];

$posts = [
    ['id'=>1,'user'=>['name'=>'Grupo de Debate Sobre IA','username'=>'ia-debate','avatar'=>'https://i.pravatar.cc/150?img=20','isGroup'=>true],'content'=>'Pessoal, o que vocês acham sobre os avanços recentes em IA generativa? Vale a pena investir tempo aprendendo como usar essas ferramentas?','time'=>'35min','likes'=>24,'comments'=>12,'liked'=>false,'isAcademic'=>false],
    ['id'=>2,'user'=>['name'=>'Márcia Silva','username'=>'marciasilva','avatar'=>'https://i.pravatar.cc/150?img=31','isGroup'=>false],'content'=>'Acabei de me juntar ao TydraPI! Alguém da área de UX/UI?','time'=>'2h','likes'=>15,'comments'=>8,'liked'=>true,'isAcademic'=>false],
    ['id'=>3,'user'=>['name'=>'Grupo de Estudos - Matemática Avançada','username'=>'matematica-grupo','avatar'=>'https://i.pravatar.cc/150?img=42','isGroup'=>true],'content'=>'Lembrando a todos: sessão de Cálculo 3 amanhã às 19h.','time'=>'1h','likes'=>18,'comments'=>5,'liked'=>false,'isAcademic'=>true],
];

$pendingConnections = [
    ['id'=>1,'name'=>'Pedro Rocha','username'=>'pedro_rocha','avatar'=>'https://i.pravatar.cc/150?img=12','bio'=>'Desenvolvedor Full Stack | React & Node.js','mutualInterests'=>['Programação','IA','Café']],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Início - TydraPI</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root { --red:#E10600; --yellow:#FFC107; --green:#28A745; --bg-dark:#121212; --card-bg:#1A1A1A; --text-secondary:#B0B0B0; --transfor-site:#3a3a3a; }
    body { background: var(--bg-dark); color:#ffff; }
    .sidebar { background:#000; width:490px; }
    .sidebar a.nav-link { color:#ffff; padding:0.75rem 1rem; border-radius:0.5rem; } 
    .a.nav-link { background: var(--red); }
    .sidebar a.nav-link.active, .sidebar a.nav-link:hover { background:var(--transfor-site); color:#ffff; }
    .sidebar .badge { font-size:.75rem; }
    .card-custom { background: var(--card-bg); border:1px solid #333; border-radius:0.75rem; }
    .border-priority-high { border-left:0.4rem solid var(--red) !important; }
    .border-priority-medium { border-left:0.4rem solid var(--yellow) !important; }
    .border-priority-low { border-left:0.4rem solid var(--green) !important; }
    .text-secondary-custom { color: var(--text-secondary); }
    .container-fluid { padding-left:2rem; padding-right:2rem; }
    h1 { font-size:1.75rem; margin-bottom:1.5rem; }
    h4 { font-size:1.25rem; }
    h5, h4, h6 { color: #ffff !important;}
    .card-title { font-size:1.1rem; font-weight:600; }
    .card-text, .text-secondary-custom { font-size:.9rem; }
    .d-flex.align-items-center img { object-fit:cover; }
  </style>
</head>
<body>
<div class="d-flex vh-100 w-150">
  <!-- Sidebar -->
  <nav class="sidebar d-flex flex-column p-3">
    <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
      <span class="fs-4 text-danger me-1">Tydra</span><span class="fs-4 text-white">PI</span>
    </a>
    <ul class="nav nav-pills flex-column mb-auto ">
      <li><a href="#" class="nav-link active"><i class="fas fa-home me-2"></i>Início</a></li>
      <li><a href="#" class="nav-link"><i class="fas fa-compass me-2"></i>Explorar</a></li>
      <li><a href="#" class="nav-link d-flex justify-content-between align-items-center"><span><i class="fas fa-comment me-2"></i>Mensagens</span><span class="badge bg-danger">3</span></a></li>
      <li><a href="#" class="nav-link"><i class="fas fa-users me-2"></i>Comunidades</a></li>
      <li><a href="#" class="nav-link"><i class="fas fa-chart-bar me-2"></i>Recursos Educacionais</a></li>
      <li><a href="#" class="nav-link d-flex justify-content-between align-items-center"><span><i class="fas fa-bell me-2"></i>Notificações</span><span class="badge bg-danger">7</span></a></li>
      <li><a href="./index.php" class="nav-link"><i class="fas fa-user me-2"></i>Perfil</a></li> <a style="display: none;">mudar o pefil para nao dar merda</a>
      <li><a href="#" class="nav-link"><i class="fas fa-cog me-2"></i>Configurações</a></li>
    </ul>
    <hr class="border-secondary my-3">
    <div class="d-flex align-items-center">
      <img src="https://i.pravatar.cc/150?img=56" class="rounded-circle me-2" width="40" height="40">
      <div>
        <div>João Silva</div>
        <small class="text-secondary-custom">@joaosilva</small>
      </div>
      <span class="ms-auto bg-success rounded-circle" style="width:10px;height:10px;border:2px solid #000"></span>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="flex-fill overflow-auto">
    <div class="container-fluid py-4">
      <h1>Início</h1>

      <!-- Eventos Acadêmicos -->
      <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4><i class="fas fa-graduation-cap me-2 text-secondary-custom"></i>Eventos Acadêmicos</h4>
          <a href="#" class="text-danger">Ver todos</a>
        </div>
        <div class="row g-4">
          <?php foreach ($upcomingEvents as $event):
            $borderClass = $event['priority']==='high'? 'border-priority-high' : ($event['priority']==='medium'? 'border-priority-medium':'border-priority-low');
          ?>
          <div class="col-12 col-md-4">
            <div class="card card-custom <?php echo $borderClass; ?>">
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($event['title']) ?></h5>
                <p class="card-text text-secondary-custom mb-2"><?= htmlspecialchars($event['subject']) ?></p>
                <p class="text-secondary-custom mb-0"><i class="fas fa-calendar-check me-1"></i><?= htmlspecialchars($event['date']) ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Matches Ativos -->
      <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4>Matches Ativos</h4>
          <a href="#" class="text-danger">Ver todos</a>
        </div>
        <div class="row g-4">
          <?php foreach ($activeMatches as $match): ?>
          <div class="col-12 col-md-6">
            <div class="card card-custom">
              <div class="card-body d-flex align-items-center">
                <div class="position-relative me-3">
                  <img src="<?= htmlspecialchars($match['avatar']) ?>" class="rounded-circle" width="50" height="50">
                  <?php if ($match['status']==='online'): ?><span class="bg-success rounded-circle position-absolute" style="width:10px;height:10px;bottom:2px;right:2px;border:2px solid #000"></span><?php endif; ?>
                </div>
                <div class="flex-fill">
                  <h6 class="mb-1"><?= htmlspecialchars($match['name']) ?> <small class="text-secondary-custom"><?= htmlspecialchars($match['time']) ?></small></h6>
                  <p class="mb-0 text-secondary-custom text-truncate"><?= htmlspecialchars($match['lastMessage']) ?></p>
                </div>
                <?php if ((int)$match['unread']>0): ?><span class="badge bg-danger ms-3"><?= (int)$match['unread'] ?></span><?php endif; ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Destaques -->
      <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4>Destaques</h4>
          <a href="#" class="text-danger">Atualizar</a>
        </div>
        <div class="row g-4">
          <?php foreach ($posts as $post): ?>
          <div class="col-12 col-md-8 w-100">
            <div class="card card-custom <?php echo !empty($post['isAcademic'])? 'border-priority-medium':''; ?>">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img src="<?= htmlspecialchars($post['user']['avatar']) ?>" class="rounded-circle me-3" width="40" height="40">
                  <div class="flex-fill">
                    <h6 class="mb-0"><?= htmlspecialchars($post['user']['name']) ?></h6>
                    <small class="text-secondary-custom">@<?= htmlspecialchars($post['user']['username']) ?> • <?= htmlspecialchars($post['time']) ?></small>
                  </div>
                  <?php if ($post['user']['isGroup']): ?><span class="badge <?php echo !empty($post['isAcademic'])?'bg-warning text-dark':'bg-danger'; ?>"><?php echo !empty($post['isAcademic'])?'Acadêmico':'Grupo'; ?></span><?php endif; ?>
                </div>
                <p class="text-secondary-custom"><?= htmlspecialchars($post['content']) ?></p>
                <div class="d-flex justify-content-start gap-3 mt-3">
                  <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-comment me-1"></i><?= (int)$post['comments'] ?></button>
                  <button class="btn btn-sm <?php echo $post['liked']? 'btn-danger':'btn-outline-danger'; ?>"><?php echo $post['liked']? '<i class="fas fa-heart me-1"></i>'.(int)$post['likes'] : '<i class="far fa-heart me-1"></i>'.(int)$post['likes']; ?></button>
                  <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-share"></i></button>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Conexões Pendentes -->
      <?php if (!empty($pendingConnections)): ?>
      <section class="mb-5">
        <h4 class="mb-3">Conexões Pendentes</h4>
        <div class="row g-4">
          <?php foreach ($pendingConnections as $conn): ?>
          <div class="col-12 col-md-6 w-100">
            <div class="card card-custom ">
              <div class="card-body d-flex justify-content-between align-items-start">
                <div class="d-flex gap-4">
                  <img src="<?= htmlspecialchars($conn['avatar']) ?>" class="rounded-circle me-3" width="50" height="50">
                  <div>
                    <h6 class="mb-1"><?php echo htmlspecialchars($conn['name']); ?></h6>
                    <small class="text-secondary-custom">@<?php echo htmlspecialchars($conn['username']); ?></small>
                    <p class="text-secondary-custom small mb-2"><?php echo htmlspecialchars($conn['bio']); ?></p>
                    <?php foreach ($conn['mutualInterests'] as $i): ?><span class="badge bg-danger me-1 mb-1"><?php echo htmlspecialchars($i); ?></span><?php endforeach; ?>
                  </div>
                </div>
                <div class="d-flex flex-column gap-2">
                  <button class="btn btn-sm btn-danger"><i class="fas fa-user-plus me-1"></i>Aceitar</button>
                  <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-times me-1"></i>Rejeitar</button>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
      <?php endif; ?>

    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>