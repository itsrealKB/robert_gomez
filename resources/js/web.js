import './bootstrap';

if (window.userId) {
    window.Echo.private('user.' + window.userId)
        .listen('.notification.created', (e) => {
            showNotificationToast(e.notification);
            updateNotification();
        });
}

const headings = {
    'assignment-assigned' : 'Assignment Assigned',
    'payment-detail' : 'Payment Detail'
};

const messages = {
    'assignment-assigned' : 'has assigned you a assignment.',
    'payment-detail' : 'has added a payment detail.'
};

const notificationBadge = document.querySelector('#notification-badge');
const notificationContainer = document.querySelector('#notification-container');

function showNotificationToast(data){
    const appraiser = `${data.sender.first_name} ${data.sender.last_name}`;
    const heading = headings[data.type] || 'Notification';
    const message = `${appraiser} ${messages[data.type] || ''}`;
    const url = markAsRead.replace(':id',data.id);

    const div = document.createElement("div");
    div.innerHTML = `<h6 class='m-0 fw-bold'>${heading}!</h6>
                    <p style="margin:5px 0 0;">${message}</p>`;
    Toastify({
        node: div,
        duration: 2000,
        destination: url,
        newWindow: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
        style: {
            background:"#fff",
            backdropFilter: "blur(8px)",
            WebkitBackdropFilter: "blur(8px)",
            border: "1px solid #000",
            borderRadius: "4px",
            color: "#000",
            boxShadow: "0 4px 20px rgba(0,0,0,0.5)",
            padding: "12px 16px",
            minWidth: "250px"
        }
    }).showToast();
}

async function updateNotification() {
    try {
        const response = await fetch(`${unreadNotifications}`, {
            headers: {
                'Accept': 'application/json',
            },
        });

        if (!response.ok) {
            throw new Error(`HTTP error: ${response.status}`);
        }

        const result = await response.json();
        const notifications = result.data;
        notificationContainer.innerHTML = '';

        if(notifications.length){
            notificationContainer.style.paddingTop = '15px';
            notificationBadge.textContent = notifications.length;
            const notificationHeader = document.createElement('li');
            notificationHeader.classList.add('d-flex', 'justify-content-between');
            notificationHeader.innerHTML = `<p>${notifications.length} New ${notifications.length > 1 ? 'notifications' : 'notification'}</p>
                                            <a class='clear-all' ${notifications.length ? `href="${readAll}"` : 'onclick="return false;"'} >Clear All</a>`;
            notificationContainer.append(notificationHeader);
        }

        notifications.forEach(notification => {
            const appraiser = `${notification.sender.first_name} ${notification.sender.last_name}`;
            const message = `${appraiser} ${messages[notification.type] || ''}`;
            const url = markAsRead.replace(':id', notification.id);

            const container = document.createElement('li');
            container.classList.add('notify-li');
            container.innerHTML = `<div>
                                        <a href="${url}">
                                            <h6>${formatTimeAgo(notification.created_at)}</h6>
                                            <p>${message}</p>
                                        </a>
                                    </div>`;
            notificationContainer.append(container);
        });
    }
    catch(error){
        console.error('Error fetching notifications:', error);
    }
}

function formatTimeAgo(timestamp) {
    const date = new Date(timestamp);
    const now = new Date();
    const seconds = Math.floor((now - date) / 1000);

    const intervals = {
        year: 31536000,
        month: 2592000,
        day: 86400,
        hour: 3600,
        minute: 60
    };

    if (seconds < 10) return 'just now';
    if (seconds < 60) return seconds + ' seconds ago';

    for (const [unit, secondsInUnit] of Object.entries(intervals)) {
        const interval = seconds / secondsInUnit;
        if (interval >= 1) {
            const count = Math.floor(interval);
            return `${count} ${unit}${count > 1 ? 's' : ''} ago`;
        }
    }

    return 'just now';
}

updateNotification();

