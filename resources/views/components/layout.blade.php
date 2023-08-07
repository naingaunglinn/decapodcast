<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laravel News Podcast Player</title>
        <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    </head>
    <body class="min-h-screen bg-gray-50 font-sans text-black antialiased">
        <div class="mx-auto max-w-2xl px-6 py-24">
            @persist('logo')
            <a
                href="/episodes"
                class="mx-auto flex max-w-max items-center gap-3 font-bold text-[#121212] transition hover:opacity-80"
            >
                <img
                    src="https://is1-ssl.mzstatic.com/image/thumb/Music125/v4/1c/9c/69/1c9c693f-5705-8d7e-ba7d-22da9a57637e/859742663321_cover.jpg/592x592bb.webp"
                    alt="Laravel News"
                    class="mx-auto w-12"
                />
                <span>Deca Podcast </br> By NAL Informative</span>
            </a>
            @endpersist

            <div class="py-10">{{ $slot }}</div>
            @persist('player')
            <x-episode-player />
            @endpersist
        </div>
    </body>
</html>
