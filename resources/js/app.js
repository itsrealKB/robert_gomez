import './bootstrap';

if (window.userId) {
    // Listen to user-specific channel
    window.Echo.private('user.' + window.userId)
        .listen('.notification.created', (e) => {
            console.log('User notification:', e.notification);
            showNotificationToast(e.notification);
            // updateNotificationCount();
        });
}

const headings = {
    'assignment-accepted': { heading: 'Assignment Accepted' },
    'assignment-rejected': { heading: 'Assignment Rejected' },
    'assignment-completed': { heading: 'Assignment Completed' },
    'payment-request': { heading: 'Pay Change Request' },
}

function showNotificationToast(data){
    const headingObj = headings[data.type];
    console.log(headingObj.heading);

    // $.toast({
    //     heading: headingObj.heading,
    //     text: `<strong>${data.user_name}</strong> has ${data.type.replace('_', ' ')} <a href="/admin/asign/detail/${data.assignment_id}">${data.assignment_title}</a>`,
    //     position: 'top-right',
    //     icon: 'info',
    //     loader: true,
    //     loaderBg: '#9EC600'
    // });
}

