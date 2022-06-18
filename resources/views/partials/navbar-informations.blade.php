<div class="title-wrapper">
  <div class="title-text my-3">
    <h1>Informations</h1>
  </div>
  <div class="title-buttons">
    <ul class="d-flex justify-content-around">
      <li class="title-btn {{ (request()->segment(2) == 'settings' ) ? 'settings-active' : '' }}"><a href="/informations/settings/{{ auth()->user()->username }}">Settings</a></li>
      <li class="title-btn {{ (request()->segment(2) == 'status' ) ? 'settings-active' : '' }}"><a href="/informations/status/{{ auth()->user()->username }}">Status</a></li>
      <li class="title-btn {{ (request()->segment(2) == 'history') ? 'settings-active' : ''}}"><a href="/informations/history/{{ auth()->user()->username }}">History</a></li>
    </ul>
  </div>
</div>