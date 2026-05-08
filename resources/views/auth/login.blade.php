<x-layout>
  <x-form title="Sign in  " description="Start tracking your ideas today">

            <form action="/login"  method="POST" class="mt-10 space-y-4">
                @csrf

                <x-form.field label="Email" name="email"  type="email"/>
                <x-form.field label="Password" name="password"  type="password"/>


                <button type="submit" data-test="login-button" class="btn mt-2 h-10  w-full">Sign In </button>
            </form>

      <div class="text-center mt-5">
          <p class="text-foreground">Don't  have an account? <a class="text-primary" href="/login">Sign Up Here</a></p>
      </div>
  </x-form>
</x-layout>
