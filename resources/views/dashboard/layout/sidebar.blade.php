<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-dark text-white">Admin Dashboard</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{  $title == 'About' ? 'active' : '' }}" href="/dashboard">About</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{  $title == 'Slide' ? 'active' : '' }}" href="/dashboard/slide/create">Slide</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Category</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Article</a>
    </div>