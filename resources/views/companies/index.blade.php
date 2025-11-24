<div>
    <h1>A LIST OF COMPANIES</h1>
    <p>Name of Company: {{ $company }}</p>
    <p>Age : {{ $age }}</p>
    <p>Registered: {{ $registered }}</p>
    {{-- <p>Items Sold: {{ $listOfFruits }}</p> --}}

    @if ($registered)
        <h4 style="color: green">Congrats, you have successfully registered !!</h4>
    @else
        <h4 style="color: red">Sorry, you have NOT registered !!</h4>
    @endif

    @for ($i = 0; $i < 10; $i++)
        <p>The current number is: {{ $i }}</p>
    @endfor

    <p>
        Items Sold:
    </p>
    <ol>
        @foreach ($listOfFruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ol>

    @forelse ($companies as $company)
        <div style="border:1px solid black">
            <p>Name: {{ $company->name }}</p>
            <p>Address : {{ $company->address }}</p>
            <p>Contact: {{ $company->contact }}</p>
        </div>
    @empty
        <p>There are no companies to display</p>
    @endforelse


    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
