require('./style.css');

{
  const $filterForm = document.querySelector(`.lineup__form`),
    $events = document.querySelector(`.filter__result-list`);

  const handleLoadEvents = data => {
    console.log(data);
    $events.innerHTML = data
      .map(result => createEventsListItem(result))
      .join(``);
  };

  const createEventsListItem = result => {
    //console.log(event);
    return `<li class="item">
    <a href="index.php?page=detail&amp;id=${result['id']}">
    <article>
      <div class="kijker__act-info">
        <p class="kijker__act-typeLabel">${result['type']}</p>
        <div  class="kijker__act-textLabel">
          <h3 class="kijker__act-textLabel-artist">${result['artist']}<sup>${
  result['artist']
} ? '' : ${result['short']};</sup></h3>
          <p class="kijker__act-textLabel-place">${result['name']}</p>
          <div class="kijker__act-textLabel-time" >
          <p class="kijker__act-textLabel-day">${result['day']}</p>
            <p>${result['time']}</p>
          </div>
        </div>
      </div>
      <div class="kijker__act-img">
        <img class="top" src="./assets/img/isb/${result['day']};?>/${
  result['type']
}/${
  result['imgpath']
}.jpg" width="300px"alt="Foto van $result{['artist']}"/>
      </div>
    </article>
    </a>
  </li>`;
  };

  const handleSubmitFilterForm = e => {
    //console.log("submit");
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadEvents(data));
    // .then(r => r.text())
    // .then(text => console.log(text));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, e => {
        e.target.preventDefault();
      });
      $filterForm.addEventListener(`click`, handleSubmitFilterForm);
    }
  };

  init();
}
