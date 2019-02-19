

/*
 (function() {
 var bttn = document.getElementById( 'dashboard-inof' );
 
 // make sure..
 bttn.disabled = false;
 
 bttn.addEventListener( 'click', function() {
 // simulate loading (for demo purposes only)
 classie.add( bttn, 'active' );
 setTimeout( function() {
 
 classie.remove( bttn, 'active' );
 
 // create the notification
 var notification = new NotificationFx({
 message : '<span class="icon icon-calendar"></span><p>The event was added to your calendar. Check out all your events in your <a href="#">event overview</a>.</p>',
 layout : 'attached',
 effect : 'bouncyflip',
 type : 'notice', // notice, warning or error
 onClose : function() {
 bttn.disabled = false;
 }
 });
 
 // show the notification
 notification.show();
 
 }, 1200 );
 
 // disable the button (for demo purposes only)
 this.disabled = true;
 } );
 })();
 
 */
function notify(notify_id) {
    var bttn = document.getElementById('dashboard_'+notify_id);
    var ID = notify_id;
    
    var MSG = createMsg(ID) ;
    // make sure..
    bttn.disabled = false;

    // bttn.addEventListener('click', function () {
    // simulate loading (for demo purposes only)
    classie.add(bttn, 'active');
    setTimeout(function () {

        classie.remove(bttn, 'active');
       // create the notification
        var notification = new NotificationFx({
            message: MSG,
            layout: 'attached',
            effect: 'bouncyflip',
            type: 'notice', // notice, warning or error
            onClose: function () {
                bttn.disabled = false;
            }
        });

        // show the notification
        notification.show();

    }, 1200);

    // disable the button (for demo purposes only)
    this.disabled = true;
    
    
    //});
}


function createMsg(msgID) {

    var Title;
    var MSG;
    var response;

    switch (msgID) {
        case 1:
            Title = 'Notification no 1';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'

            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 2:
            Title = 'Notification no 2';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 3:
            Title = 'Notification no 3';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 4:
            Title = 'Notification no 4';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 5:
            Title = 'Notification no 5';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 6:
            Title = 'Notification no 6';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 7:
            Title = 'Notification no 7';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 8:
            Title = 'Notification no 8';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 9:
            Title = 'Notification no 9';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 10:
            Title = 'Notification no 10';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 11:
            Title = 'Notification no 11';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 12:
            Title = 'Notification no 12';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 13:
            Title = 'Notification no 13';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 14:
            Title = 'Notification no 14';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 15:
            Title = 'Notification no 15';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 16:
            Title = 'Notification no 16';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 17:
            Title = 'Notification no 17';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 18:
            Title = 'Notification no 18';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 19:
            Title = 'Notification no 19';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 20:
            Title = 'Notification no 20';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 21:
            Title = 'Notification no 21';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 22:
            Title = 'Notification no 22';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 23:
            Title = 'Notification no 23';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        case 24:
            Title = 'Notification no 24';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'
            // div class -> box  box-default  // use if required
            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

            break;
        default:
            Title = 'Default  notification';
            MSG = 'This is custom message for notification. we will show information about functions under the hood'

            response = '<div class="text-info pull-right"> <div class="box-header with-border"> <h3 class="box-title text-aqua"> ' + Title + '</h3></div><div class="box-body">' + MSG + '</div></div>'

    }

    return response
}