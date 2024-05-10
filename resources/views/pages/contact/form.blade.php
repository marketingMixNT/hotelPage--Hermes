<div class="w-full mt-12 ">
    @if (isset($formSubmitted))
    <script>
        const formSubmitted = {!! json_encode($formSubmitted) !!};
        window.onload = function() {
            if (formSubmitted) {
                var element = document.getElementById('formContact');
                var rect = element.getBoundingClientRect();
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                window.scrollTo(0, rect.top + scrollTop - 300);
            }
        }
    </script>
    <div id="formContact" class="flex justify-start items-start h-full mt-20 ">
        <div class=" flex flex-col gap-4 text-left my-6">
    
            <h3 class="text-5xl mb-2 font-primary text-fontPrimary">Dziękujemy za wiadomość!</h3>
            <span class="text-xl  text-fontPrimary font-secondary font-light">Odpowiemy najszybciej jak to możliwe!</span>
        </div>
    </div>
    @else
    <form method="post" action="{{ route('contact_form') }}" id="contactForm"
            class="max-w-md  flex flex-col justify-start items-start">
            @csrf
            <x-base.input type='text' name='name' id='name' for='name' required>Imię i
                nazwisko</x-base.input>
            <x-base.input type='email' name='email' id='email' for='email' required>Email</x-base.input>
            <x-base.input type='tel' name='tel' id='tel' for='tel'>Numer
                telefonu</x-base.input>
            @error('tel')
                <p class="text-red-600 text-xs">Numer telefonu nie może zawierać liter</p>
            @enderror
            <x-base.textarea name='content' id='content' for='content' required>Wiadomość</x-base.textarea>
    
    
    
        

        <x-base.button>Wyślij</x-base.button>
    
    </form>
    </div>
    @endif