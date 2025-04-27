<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Notificações - TydraPI</title>
    <?php include 'header.php' ?>
    <style>
        body {
            background-color: var(--background-dark);
            color: var(--text-color);
        }
        .notifications-container {
            margin-left: 500px; /* To the right of the sidebar */
            padding: 20px;
            max-width: 700px;
        }
        .nav-tabs .nav-link {
            color: var(--text-color);
            font-weight: 600;
        }
        .nav-tabs .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }
        .notification-card {
            background-color: var(--card-background);
            border-radius: 8px;
            margin-bottom: 15px;
            border: none;
            color: var(--text-color);
        }
        .notification-card.unread {
            border-left: 5px solid var(--primary-color);
            font-weight: 600;
            background-color: #2a2a2a;
        }
        .notification-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: var(--primary-color);
        }
        .mark-read-btn {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php' ?>

    <div class="notifications-container">
        <ul class="nav nav-tabs" id="notificationTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active d-flex align-items-center" id="all-tab" data-filter="all" type="button" role="tab" aria-controls="all" aria-selected="true">
                    <i class="bi bi-bell-fill me-2"></i> Todas
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link d-flex align-items-center" id="unread-tab" data-filter="unread" type="button" role="tab" aria-controls="unread" aria-selected="false">
                    <i class="bi bi-bell-slash-fill me-2"></i> Não Lidas
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link d-flex align-items-center" id="read-tab" data-filter="read" type="button" role="tab" aria-controls="read" aria-selected="false">
                    <i class="bi bi-bell-check-fill me-2"></i> Lidas
                </button>
            </li>
        </ul>

        <div id="notificationsList" class="mt-3">
            <div class="card notification-card unread d-flex align-items-center" data-status="unread">
                <i class="bi bi-envelope-fill notification-icon"></i>
                <div class="flex-grow-1">
                    Nova mensagem recebida de João.
                </div>
                <button class="btn btn-outline-danger btn-sm mark-read-btn">Marcar como lida</button>
            </div>
            <div class="card notification-card read d-flex align-items-center" data-status="read">
                <i class="bi bi-check-circle-fill notification-icon"></i>
                <div class="flex-grow-1">
                    Seu post foi aprovado.
                </div>
                <button class="btn btn-success btn-sm mark-read-btn" disabled>Lida</button>
            </div>
            <div class="card notification-card unread d-flex align-items-center" data-status="unread">
                <i class="bi bi-person-plus-fill notification-icon"></i>
                <div class="flex-grow-1">
                    Você tem um novo seguidor.
                </div>
                <button class="btn btn-outline-danger btn-sm mark-read-btn">Marcar como lida</button>
            </div>
            <div class="card notification-card read d-flex align-items-center" data-status="read">
                <i class="bi bi-info-circle-fill notification-icon"></i>
                <div class="flex-grow-1">
                    Atualização de sistema disponível.
                </div>
                <button class="btn btn-success btn-sm mark-read-btn" disabled>Lida</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('#notificationTabs .nav-link');
            const notifications = document.querySelectorAll('#notificationsList .notification-card');

            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    // Add active class to clicked tab
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    notifications.forEach(notification => {
                        if (filter === 'all') {
                            notification.style.display = 'flex';
                        } else {
                            if (notification.getAttribute('data-status') === filter) {
                                notification.style.display = 'flex';
                            } else {
                                notification.style.display = 'none';
                            }
                        }
                    });
                });
            });

            // Mark as read button functionality
            const markReadButtons = document.querySelectorAll('.mark-read-btn');

            markReadButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const notification = this.closest('.notification-card');
                    notification.classList.remove('unread');
                    notification.classList.add('read');
                    notification.setAttribute('data-status', 'read');
                    this.textContent = 'Lida';
                    this.classList.remove('btn-outline-danger');
                    this.classList.add('btn-success');
                    this.disabled = true;

                    // If current tab is "Não Lidas", hide this notification after marking read
                    const activeTab = document.querySelector('#notificationTabs .nav-link.active');
                    if (activeTab && activeTab.getAttribute('data-filter') === 'unread') {
                        notification.style.display = 'none';
                    }
                });
            });
        });
           
    </script>
    </body>
</html>

