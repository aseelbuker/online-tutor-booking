@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%; background: #fff;">
      <h3 class="mb-4 text-center" style="color: var(--color-primary); font-weight: 700;">Book a Session</h3>
      <form>
        <div class="mb-3">
          <label for="date" class="form-label">Date</label>
          <input type="date" class="form-control" id="date">
        </div>
        <div class="mb-3">
          <label for="time" class="form-label">Time</label>
          <input type="time" class="form-control" id="time">
        </div>
        <div class="mb-3">
          <label for="notes" class="form-label">Notes</label>
          <textarea class="form-control" id="notes" rows="3" placeholder="Anything specific you want to cover?"></textarea>
        </div>
        <button type="submit" class="btn w-100" style="background: var(--color-primary); color: #fff;">Book Now</button>
      </form>
    </div>
  </div>
</section>
@endsection 