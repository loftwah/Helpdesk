@extends('helpdesk::layout.main')

@section('content')
  <section class="hero is-info">
    <div class="hero-body">
      <div class="level is-mobile">
        <div class="level-item has-text-centered">
          <a href="#open">
            <div>
              <p class="heading">Open Tickets</p>
              <p class="title"><strong>{{ $openCount }}</strong></p>
            </div>
          </a>
        </div>

        <div class="level-item has-text-centered">
          <a href="#closed">
            <div>
              <p class="heading">Closed Tickets</p>
              <p class="title"><strong>{{ $closedCount }}</strong></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>


  <div class="section" id="open">
    <div class="container">
      <h1 class="title">Open</h1>

      @include('helpdesk::dashboard.sections.table', [
        'tickets' => $open,
        'withDue' => true,
      ])

      @if ($open->hasMorePages())
        <a id="open-see-more" class="button" href="{{ route('helpdesk.tickets.opened.index') }}">See all {{ $openCount }}...</a>
      @else
        <a id="open-see-more" class="button is-disabled">No more to show...</a>
      @endif
    </div>
  </div>

  <div class="section" id="closed">
    <div class="container">
      <h1 class="title">Closed</h1>

      @include('helpdesk::dashboard.sections.table', [
        'tickets' => $closed,
        'withLastAction' => true
      ])

      @if ($closed->hasMorePages())
        <a
          id="closed-see-more"
          class="button"
          href="{{ route('helpdesk.tickets.closed.index') }}"
        >
          See all {{ $closedCount }}...
        </a>
      @else
        <a id="closed-see-more" class="button is-disabled">
          No more to show...
        </a>
      @endif
    </div>
  </div>

  @if (isset(auth()->user()->agent->is_super) && auth()->user()->agent->is_super)
    <div class="section" id="ignored">
      <div class="container">
        <h1 class="title">Ignored</h1>

        @include('helpdesk::dashboard.sections.table', [
          'tickets' => $ignored,
          'withLastAction' => true
        ])

        @if ($ignored->hasMorePages())
          <a
            id="ignored-see-more"
            class="button"
            href="{{ route('helpdesk.tickets.ignored.index') }}"
          >
            See all {{ $ignoredCount }}...
          </a>
        @else
          <a id="ignored-see-more" class="button is-disabled">
            No more to show...
          </a>
        @endif
      </div>
    </div>
  @endif
@endsection
