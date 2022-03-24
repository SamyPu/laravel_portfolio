@extends('back.layouts.app')
@section('content')
    <h1>Facts</h1>
    <form action='{{ route('fact.store') }}' method='post'>
        @csrf
        <div>
            {{-- <label for=>icone</label>
            <input type='text' name='icone'> --}}
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="icone" id="btnradio1" value='<i class="bx bxl-linkedin"></i>' >
                <label class="btn btn-outline-primary" for="btnradio1"><i class="bx bxl-linkedin"></i></label>

                <input type="radio" class="btn-check" name="icone" id="btnradio2" value='<i class="bx bxl-skype"></i>' >
                <label class="btn btn-outline-primary" for="btnradio2"><i class="bx bxl-skype"></i></label>

                <input type="radio" class="btn-check" name="icone" id="btnradio3" value='<i class="bx bxl-instagram"></i>' >
                <label class="btn btn-outline-primary" for="btnradio3"><i class="bx bxl-instagram"></i></label>
              
                <input type="radio" class="btn-check" name="icone" id="btnradio4" value="<i class='bx bxl-facebook'></i>">
                <label class="btn btn-outline-primary" for="btnradio4"><i class="bx bxl-facebook"></i></label>
              
                <input type="radio" class="btn-check" name="icone" id="btnradio5" value="<i class='bx bxl-twitter'></i>">
                <label class="btn btn-outline-primary" for="btnradio5"><i class="bx bxl-twitter"></i></label>

                <input type="radio" class="btn-check" name="icone" id="btnradio6" value="<i class='bx bx-shocked'></i>">
                <label class="btn btn-outline-primary" for="btnradio6"><i class='bx bx-shocked'></i></label>
              </div>

        </div>
        <div>
            <label for=>number</label>
            <input type='text' name='number'>
        </div>
        <div>
            <label for=>description</label>
            <input type='text' name='description'>
        </div>
        <button type='submit'>Create</button>
    </form>
@endsection
