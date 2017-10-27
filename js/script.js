var controlWrap = document.querySelector('.wrap-form'); //wrap
    closeFeedback = document.querySelector('.wrap-form > a');
    link = document.querySelector('.open-form-feedback'); //ссылка

    controlWrap.classList.add('wrap-form-active');
    link.classList.add('open-form-feedback-active');

link.addEventListener('click', openForm);
    function openForm(e){
      e.preventDefault();
      controlWrap.classList.toggle('wrap-form-active');
      link.classList.toggle('open-form-feedback-active');
}

closeFeedback.addEventListener('click', openForm);
    function openForm(e){
      e.preventDefault();
      controlWrap.classList.toggle('wrap-form-active');
      link.classList.toggle('open-form-feedback-active');
}
