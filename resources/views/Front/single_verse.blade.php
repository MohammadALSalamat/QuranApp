<style>
    body {

        background-image: url("https://upload.3dlat.net/uploads/13826566512.jpg");
        animation: bodyy 50s 50 ease-in-out;
    }

    @keyframes bodyy {
        from {
            background-position: 0px;
        }

        50% {
            background-position: -1000px
        }

        to {
            background-position: 1000px
        }

    }


    ul {
        position: relative;
        width: 90%;
        margin: 20% auto;
        background: #0005;
        height: 350px;
        border: 2px solid #fff;
        outline: 7px solid #0005;
        padding: 0 10px;
        text-align: justify
    }

    ul li {
        position: absolute;
        margin-top: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        list-style: none;
        line-height: 2
    }

    strong {
        border: 1px double #fff;
        border-radius: 50%;
        padding: 10px;
        margin: 0 5px
    }
</style>
<html dir="rtl">
<ul>
    <li>
        @foreach ($verses as $verse)
        {{ $verse['text_indopak']}} <strong> {{ $verse['verse_key'] }} </strong>
        @endforeach
    </li>
</ul>

</html>

<script>
    let chapterId = <?= $verse['chapter_id'] ?> ,
        currentPage = <?= $meta_verses['current_page'] ?> ,
        numberOfPages = <?= $chapter['pages']['1'] - $chapter['pages']['0']?> ;
    // redirect to google after 5 seconds
                if (currentPage < numberOfPages) {
                    let verse1= currentPage;
                    window.setTimeout(function() {
                        window.location.href = '/chapters/' + chapterId + '/verses/' + verse1;
                    }, 10000);
                    verse1 = verse1 + 1 ;
                }else{
                    let incChapterId = chapterId + 1;
                    window.setTimeout(function() {
                        window.location.href = '/chapters/' + incChapterId + '/verses/' + 1;
                    }, 10000);
                }



</script>
