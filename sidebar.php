<nav class="sidebar d-flex flex-column p-3">
            <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
                <span class="fs-4 text-danger me-1">Tydra</span><span class="fs-4 text-white">PI</span>
            </a>
            <ul class="nav nav-pills flex-column mb-auto ">
<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<li><a href="hub.php" class="nav-link <?php echo ($currentPage == 'hub.php') ? 'active' : ''; ?>"><i class="fas fa-home me-2"></i>Início</a></li>
<li><a href="./explorar.php" class="nav-link <?php echo ($currentPage == 'explorar.php') ? 'active' : ''; ?>"><i class="fas fa-compass me-2"></i>Explorar</a></li>
<li><a href="./chat.php" class="nav-link d-flex justify-content-between align-items-center <?php echo ($currentPage == 'chat.php') ? 'active' : ''; ?>"><span><i class="fas fa-comment me-2"></i>Mensagens</span><span class="badge bg-danger">7</span></a></li>
<li><a href="./comunidades.php" class="nav-link <?php echo ($currentPage == 'comunidades.php') ? 'active' : ''; ?>"><i class="fas fa-users me-2"></i>Comunidades</a></li>

<li class="recursos-educacionais">
    <a href="./recursoeducacionais.php" class="nav-link d-flex justify-content-between align-items-center nameP">
        <span>
            <i class="fas fa-graduation-cap me-2"></i>Recursos Educacionais
        </span>
        <span class="toggle-submenu" >
            <i class="fas fa-chevron-down recursos-icon"></i>
        </span>
    </a>
                <ul class="sub-menu" id="recursos-submenu">
                <li><a href="#" class="nav-link sub-link"><i class="fas fa-book me-2"></i>Material de Estudo</a></li>
                <li><a href="#" class="nav-link sub-link"><i class="fas fa-video me-2"></i>Video Aulas</a></li>
                <li><a href="#" class="nav-link sub-link"><i class="fas fa-tasks me-2"></i>Exercícios Práticos</a></li>
                <li><a href="#" class="nav-link sub-link"><i class="fas fa-lightbulb me-2"></i>Dicas de Estudo</a></li>
                </ul>
</li>
<li><a href="./notific.php" class="nav-link d-flex justify-content-between align-items-center <?php echo ($currentPage == 'notific.php') ? 'active' : ''; ?>"><span><i class="fas fa-bell me-2"></i>Notificações</span></a></li>
<li><a href="./index.php" class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>"><i class="fas fa-user me-2"></i>Perfil</a></li>
<li><a href="./configuracao.php" class="nav-link <?php echo ($currentPage == 'configuracao.php') ? 'active' : ''; ?>"><i class="fas fa-cog me-2"></i>Configurações</a></li>
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
<script>
// Verificar a página atual
const currentPage = window.location.pathname.split('/').pop();
const resourcePages = ['recursoeducacionais.php', 'material.php', 'videos.php', 'exercicios.php', 'dicas.php'];
const recursosElement = document.querySelector('.recursos-educacionais');
const titleElment = document.querySelector('.nameP')
const toggleButton = document.querySelector('.toggle-submenu');
const menu = document.querySelector('nav-link');


function isResourcePage() {
    return resourcePages.includes(currentPage);

}

// Ativar/desativar o menu
function toggleMenu() {
    recursosElement.classList.toggle('active');
    toggleButton.classList.add('active');
    titleElment.style.backgroundColor = 'red';
}


// Fechar menu quando clicar fora
function closeMenu() {
    if (!isResourcePage()) {
        recursosElement.classList.remove('active');
        toggleButton.classList.remove('active');
    }
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Abrir menu automaticamente se estiver em página de recursos
    if (isResourcePage()) {
        recursosElement.classList.add('active');
        toggleButton.classList.add('active');

    }
});

// Clique no botão de toggle
toggleButton.addEventListener('click', (e) => {
    e.preventDefault();
    e.stopPropagation();
    toggleMenu();

});

// Clique em qualquer lugar do documento
document.addEventListener('click', (e) => {
    // Fechar menu se clicar fora
    if (!e.target.closest('.recursos-educacionais')) {
        closeMenu();
    }
    
    // Fechar ao clicar em links do sub-menu (opcional)
    if (e.target.closest('.sub-menu a')) {
        if (!isResourcePage()) closeMenu();

    }
});

// Monitorar mudanças de navegação (para SPAs)
window.addEventListener('popstate', () => {
    if (!isResourcePage()) closeMenu();
});

</script>