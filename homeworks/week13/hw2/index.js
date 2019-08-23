$(document).ready(() => {
  $('.matter_add').click(() => {
    if ($('.matter_box').val() === '') {
      alert('Please enter the content');
    } else {
      const list = 
        `
        <div class="matter_list input-group mb-3">
          <div class="list_content form-control">${$('.matter_box').val()}</div>
          <div class="list input-group-append">
            <button class="list_don btn btn-outline-secondary" type="button" id="button-addon2">✓</button>
            <button class="list_del btn btn-outline-secondary" type="button" id="button-addon2">✗</button>
          </div>
        </div>
        `;
      $('.container').append(list);
      $('.matter_box').val('');
    }
  });
  $('.container').click((e) => {
    if ($(e.target).hasClass('list_del')) {
      $(e.target).parent().parent().fadeOut();
    }
    if ($(e.target).hasClass('list_don')) {
      $(e.target).parent().parent().toggleClass('active');
    }
  });
});  
