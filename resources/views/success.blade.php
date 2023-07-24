<x-guest-layout>
    {{-- <h1 class="text-center">Congratulations!</h1> --}}
    <p class="">Hi <strong>{{ $firstName }}</strong>!</p>

    <p class="mt-2"><strong>Welcome</strong> to the F.R.E.E. Christian Church Bugayong family! 🙏🏼✨</p>

    <p class="mt-4"><strong>Congratulations!</strong> 🎉 You are now a registered member of our loving community of believers. We're thrilled to have you on this spiritual journey.</p>

    <p class="mt-4">As a member, you'll enjoy inspiring events, enriching programs, and uplifting services to strengthen your faith and connect with God. Join our ministries and small groups to forge meaningful connections with like-minded individuals.</p>

    <p class="mt-4">Stay updated on events and sermons through our newsletters and social media. Share your spiritual experiences with us and be part of our community outreach.</p>

    <p class="mt-4">We look forward to walking alongside you on this incredible journey of faith. God's love and grace will guide and bless you abundantly. 🌟</p>

    {{-- <p class="mt-4">Once again, we extend our heartfelt congratulations and look forward to walking alongside you on this incredible journey of faith. May God's love and grace continue to guide and bless you abundantly.</p> --}}
    <div class="flex items-center justify-end mt-4">

        <x-nav-button href="{{ route('registration') }}">
            {{ __('Register Another') }}
        </x-nav-button>
    </div>
</x-guest-layout>
