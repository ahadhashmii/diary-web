@extends('layouts.main')

@push('title')
    <title>My Diary - Home</title>
@endpush

@section('content')

<section class="home-main">
    <div class="back-img">
        <h1>My Diary</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque delectus vel beatae dolores
            molestias neque, velit excepturi aliquam molestiae aliquid praesentium nisi tempore, a ipsam libero
            possimus eius quam suscipit!</p>
        <a href="/create"><button class="btn-fill">LET'S WRITE A NOTE</button></a>
    </div>

    <div class="my-notes">
        <div class="notes-head">
            <h1>My Notes (12)</h1>
            <button class="btn-outlined">View All</button>
        </div>
        <hr>
        <div class="item-note">
            <img src="assets/images/home_background.jpg" alt="">
            <div class="note-content">
                <div class="title-heart">
                    <h2>This is the note title</h2>
                    <img src="assets/icons/heart-normal.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis magnam dicta sequi ratione,
                    suscipit, dolores asperiores error voluptatibus, laboriosam labore veritatis. Voluptate
                    temporibus perferendis numquam itaque obcaecati voluptatibus repudiandae incidunt minus,
                    expedita debitis quae eum, dolorem aut impedit facilis enim earum aliquam dignissimos harum
                    animi? Aliquid dolorum aliquam provident corrupti sed dignissimos reiciendis, modi et atque,
                    animi harum rerum nostrum? Explicabo placeat itaque sit voluptatum. Quaerat officia cumque,
                    nulla voluptatibus ipsa vero corporis hic doloremque aliquid temporibus ducimus consequatur fuga
                    id voluptatum atque, dolor sed obcaecati est. Placeat molestiae pariatur voluptate ex ad hic
                    cumque odit error repellat, aspernatur sed ratione blanditiis accusantium reprehenderit dolorum
                    perspiciatis nam fugiat recusandae incidunt dignissimos ipsam nulla quas id. Provident sint
                    molestias nesciunt quis nam, perferendis maxime suscipit, quam debitis sed sunt velit numquam
                    rerum laboriosam recusandae vero veritatis vitae! Sapiente dignissimos debitis hic non aperiam
                    optio unde magni soluta porro iure voluptate eligendi sit velit, reprehenderit accusantium
                    deleniti omnis repudiandae. Iure laboriosam libero labore fugiat nulla eos alias ex veritatis
                    magnam doloremque fuga exercitationem, suscipit ut dignissimos doloribus unde odit explicabo. Ad
                    totam eius quod et eligendi deleniti obcaecati minima enim eos, alias at nihil quo libero
                    perferendis qui laborum ab cum.
                </p>
                <div class="date-category">
                    <h5>NATURE</h5>
                    <h5>JAN 15, 2022 03:15PM</h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="item-note">
            <img src="assets/images/home_background.jpg" alt="">
            <div class="note-content">
                <div class="title-heart">
                    <h2>This is the note title</h2>
                    <img src="assets/icons/heart-normal.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis magnam dicta sequi ratione,
                    suscipit, dolores asperiores error voluptatibus, laboriosam labore veritatis. Voluptate
                    temporibus perferendis numquam itaque obcaecati voluptatibus repudiandae incidunt minus,
                    expedita debitis quae eum, dolorem aut impedit facilis enim earum aliquam dignissimos harum
                    animi? Aliquid dolorum aliquam provident corrupti sed dignissimos reiciendis, modi et atque,
                    animi harum rerum nostrum? Explicabo placeat itaque sit voluptatum. Quaerat officia cumque,
                    nulla voluptatibus ipsa vero corporis hic doloremque aliquid temporibus ducimus consequatur fuga
                    id voluptatum atque, dolor sed obcaecati est. Placeat molestiae pariatur voluptate ex ad hic
                    cumque odit error repellat, aspernatur sed ratione blanditiis accusantium reprehenderit dolorum
                    perspiciatis nam fugiat recusandae incidunt dignissimos ipsam nulla quas id. Provident sint
                    molestias nesciunt quis nam, perferendis maxime suscipit, quam debitis sed sunt velit numquam
                    rerum laboriosam recusandae vero veritatis vitae! Sapiente dignissimos debitis hic non aperiam
                    optio unde magni soluta porro iure voluptate eligendi sit velit, reprehenderit accusantium
                    deleniti omnis repudiandae. Iure laboriosam libero labore fugiat nulla eos alias ex veritatis
                    magnam doloremque fuga exercitationem, suscipit ut dignissimos doloribus unde odit explicabo. Ad
                    totam eius quod et eligendi deleniti obcaecati minima enim eos, alias at nihil quo libero
                    perferendis qui laborum ab cum.
                </p>
                <div class="date-category">
                    <h5>NATURE</h5>
                    <h5>JAN 15, 2022 03:15PM</h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="item-note">
            <img src="assets/images/home_background.jpg" alt="">
            <div class="note-content">
                <div class="title-heart">
                    <h2>This is the note title</h2>
                    <img src="assets/icons/heart-normal.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis magnam dicta sequi ratione,
                    suscipit, dolores asperiores error voluptatibus, laboriosam labore veritatis. Voluptate
                    temporibus perferendis numquam itaque obcaecati voluptatibus repudiandae incidunt minus,
                    expedita debitis quae eum, dolorem aut impedit facilis enim earum aliquam dignissimos harum
                    animi? Aliquid dolorum aliquam provident corrupti sed dignissimos reiciendis, modi et atque,
                    animi harum rerum nostrum? Explicabo placeat itaque sit voluptatum. Quaerat officia cumque,
                    nulla voluptatibus ipsa vero corporis hic doloremque aliquid temporibus ducimus consequatur fuga
                    id voluptatum atque, dolor sed obcaecati est. Placeat molestiae pariatur voluptate ex ad hic
                    cumque odit error repellat, aspernatur sed ratione blanditiis accusantium reprehenderit dolorum
                    perspiciatis nam fugiat recusandae incidunt dignissimos ipsam nulla quas id. Provident sint
                    molestias nesciunt quis nam, perferendis maxime suscipit, quam debitis sed sunt velit numquam
                    rerum laboriosam recusandae vero veritatis vitae! Sapiente dignissimos debitis hic non aperiam
                    optio unde magni soluta porro iure voluptate eligendi sit velit, reprehenderit accusantium
                    deleniti omnis repudiandae. Iure laboriosam libero labore fugiat nulla eos alias ex veritatis
                    magnam doloremque fuga exercitationem, suscipit ut dignissimos doloribus unde odit explicabo. Ad
                    totam eius quod et eligendi deleniti obcaecati minima enim eos, alias at nihil quo libero
                    perferendis qui laborum ab cum.
                </p>
                <div class="date-category">
                    <h5>NATURE</h5>
                    <h5>JAN 15, 2022 03:15PM</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="my-notes" style="margin-top: 50px;">
        <div class="notes-head">
            <h1>Favorites (12)</h1>
            <button class="btn-outlined">View All</button>
        </div>
        <hr>
        <div class="item-note">
            <img src="assets/images/home_background.jpg" alt="">
            <div class="note-content">
                <div class="title-heart">
                    <h2>This is the note title</h2>
                    <img src="assets/icons/heart-fill.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis magnam dicta sequi ratione,
                    suscipit, dolores asperiores error voluptatibus, laboriosam labore veritatis. Voluptate
                    temporibus perferendis numquam itaque obcaecati voluptatibus repudiandae incidunt minus,
                    expedita debitis quae eum, dolorem aut impedit facilis enim earum aliquam dignissimos harum
                    animi? Aliquid dolorum aliquam provident corrupti sed dignissimos reiciendis, modi et atque,
                    animi harum rerum nostrum? Explicabo placeat itaque sit voluptatum. Quaerat officia cumque,
                    nulla voluptatibus ipsa vero corporis hic doloremque aliquid temporibus ducimus consequatur fuga
                    id voluptatum atque, dolor sed obcaecati est. Placeat molestiae pariatur voluptate ex ad hic
                    cumque odit error repellat, aspernatur sed ratione blanditiis accusantium reprehenderit dolorum
                    perspiciatis nam fugiat recusandae incidunt dignissimos ipsam nulla quas id. Provident sint
                    molestias nesciunt quis nam, perferendis maxime suscipit, quam debitis sed sunt velit numquam
                    rerum laboriosam recusandae vero veritatis vitae! Sapiente dignissimos debitis hic non aperiam
                    optio unde magni soluta porro iure voluptate eligendi sit velit, reprehenderit accusantium
                    deleniti omnis repudiandae. Iure laboriosam libero labore fugiat nulla eos alias ex veritatis
                    magnam doloremque fuga exercitationem, suscipit ut dignissimos doloribus unde odit explicabo. Ad
                    totam eius quod et eligendi deleniti obcaecati minima enim eos, alias at nihil quo libero
                    perferendis qui laborum ab cum.
                </p>
                <div class="date-category">
                    <h5>NATURE</h5>
                    <h5>JAN 15, 2022 03:15PM</h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="item-note">
            <img src="assets/images/home_background.jpg" alt="">
            <div class="note-content">
                <div class="title-heart">
                    <h2>This is the note title</h2>
                    <img src="assets/icons/heart-fill.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis magnam dicta sequi ratione,
                    suscipit, dolores asperiores error voluptatibus, laboriosam labore veritatis. Voluptate
                    temporibus perferendis numquam itaque obcaecati voluptatibus repudiandae incidunt minus,
                    expedita debitis quae eum, dolorem aut impedit facilis enim earum aliquam dignissimos harum
                    animi? Aliquid dolorum aliquam provident corrupti sed dignissimos reiciendis, modi et atque,
                    animi harum rerum nostrum? Explicabo placeat itaque sit voluptatum. Quaerat officia cumque,
                    nulla voluptatibus ipsa vero corporis hic doloremque aliquid temporibus ducimus consequatur fuga
                    id voluptatum atque, dolor sed obcaecati est. Placeat molestiae pariatur voluptate ex ad hic
                    cumque odit error repellat, aspernatur sed ratione blanditiis accusantium reprehenderit dolorum
                    perspiciatis nam fugiat recusandae incidunt dignissimos ipsam nulla quas id. Provident sint
                    molestias nesciunt quis nam, perferendis maxime suscipit, quam debitis sed sunt velit numquam
                    rerum laboriosam recusandae vero veritatis vitae! Sapiente dignissimos debitis hic non aperiam
                    optio unde magni soluta porro iure voluptate eligendi sit velit, reprehenderit accusantium
                    deleniti omnis repudiandae. Iure laboriosam libero labore fugiat nulla eos alias ex veritatis
                    magnam doloremque fuga exercitationem, suscipit ut dignissimos doloribus unde odit explicabo. Ad
                    totam eius quod et eligendi deleniti obcaecati minima enim eos, alias at nihil quo libero
                    perferendis qui laborum ab cum.
                </p>
                <div class="date-category">
                    <h5>NATURE</h5>
                    <h5>JAN 15, 2022 03:15PM</h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="item-note">
            <img src="assets/images/home_background.jpg" alt="">
            <div class="note-content">
                <div class="title-heart">
                    <h2>This is the note title</h2>
                    <img src="assets/icons/heart-fill.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis magnam dicta sequi ratione,
                    suscipit, dolores asperiores error voluptatibus, laboriosam labore veritatis. Voluptate
                    temporibus perferendis numquam itaque obcaecati voluptatibus repudiandae incidunt minus,
                    expedita debitis quae eum, dolorem aut impedit facilis enim earum aliquam dignissimos harum
                    animi? Aliquid dolorum aliquam provident corrupti sed dignissimos reiciendis, modi et atque,
                    animi harum rerum nostrum? Explicabo placeat itaque sit voluptatum. Quaerat officia cumque,
                    nulla voluptatibus ipsa vero corporis hic doloremque aliquid temporibus ducimus consequatur fuga
                    id voluptatum atque, dolor sed obcaecati est. Placeat molestiae pariatur voluptate ex ad hic
                    cumque odit error repellat, aspernatur sed ratione blanditiis accusantium reprehenderit dolorum
                    perspiciatis nam fugiat recusandae incidunt dignissimos ipsam nulla quas id. Provident sint
                    molestias nesciunt quis nam, perferendis maxime suscipit, quam debitis sed sunt velit numquam
                    rerum laboriosam recusandae vero veritatis vitae! Sapiente dignissimos debitis hic non aperiam
                    optio unde magni soluta porro iure voluptate eligendi sit velit, reprehenderit accusantium
                    deleniti omnis repudiandae. Iure laboriosam libero labore fugiat nulla eos alias ex veritatis
                    magnam doloremque fuga exercitationem, suscipit ut dignissimos doloribus unde odit explicabo. Ad
                    totam eius quod et eligendi deleniti obcaecati minima enim eos, alias at nihil quo libero
                    perferendis qui laborum ab cum.
                </p>
                <div class="date-category">
                    <h5>NATURE</h5>
                    <h5>JAN 15, 2022 03:15PM</h5>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
