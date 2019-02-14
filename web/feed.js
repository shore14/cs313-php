$(function () {
    $('form').on('submit', function (event) {
      event.preventDefault();
      var message = $('.message').first().clone();//div inside one below
      message.find('p').text($('input').val()); //where to put p
      message.prependTo('.chat-container'); // div it goes in
      $('input').val('');
    });
  });


//   <div class="message">
//   <img class="avatar" src="https://placeimg.com/50/50/people?2">
//   <div class="datetime">23/03/2016 20:40</div>
//   <p>A message text</p>
// </div>
// </div>
// <form class="send-message-form">

// <input type="text" placeholder="Your message">
// <button type="submit">Send</button>
// </form>