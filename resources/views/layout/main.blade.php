<!DOCTYPE html>
<html>
<head>
  <title>Tickets</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.0/css/bulma.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <meta charset="utf-8">
  <meta name="robots" content="noindex" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    /* Override bulma colors for nav items and links */
    a.nav-item.is-tab.is-active {
      color: #3273dc;
      border-bottom-color: #3273dc;
    }

    a.nav-item.is-tab:hover {
      border-bottom-color: #3273dc;
    }

    .tabs li.is-active a {
      color: #3273dc;
    }

    a {
      color: #3273dc;
    }

    /* Team Page Table Modifiers */
    .div-button {
      box-sizing: border-box;
      display: flex;
      justify-content: flex-end;
    }

    .button--margin {
      margin: 0 .5em 0 0;
    }

    /* Vertical rhythm */
    #modal-disable .table-has-va, #modal-enable .table-has-va {
      vertical-align: middle;
    }
    
    .has-vr {
      margin-bottom: 2em;
    }

    .is-collapsed {
      margin-bottom: 0;
      margin-top: 0;
    }

    .is-collapsed-top {
      margin-top: 0;
      padding-top: 0;
    }

    .is-collapsed-bottom {
      margin-bottom: 0;
      padding-bottom: 0;
    }

    .has-margin-bottom {
      margin-bottom: 1rem !important;
    }

    .modal-background {
      background-color: rgba(50, 50, 50, 0.6);
    }

    .section.is-small,
    .hero-body.is-small {
      padding-bottom: 1.5rem;
      padding-top: 1.5rem;
    }

    .is-mi-large {
      font-size: 3rem;
    }

    .select,
    .select select {
      width: 100%;
    }

    [v-cloak] { display: none }
  </style>
</head>
<body>
  @include('helpdesk::partials.header')

  @yield('content')

  @include('helpdesk::partials.footer')
</body>
</html>
