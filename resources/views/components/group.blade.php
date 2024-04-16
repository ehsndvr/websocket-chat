<section class="main-massage__box">
            <div class="massage-box__search">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 18 18"><title>magnifier</title><g fill="#212121" class="nc-icon-wrapper"><path d="M15.25,16c-.192,0-.384-.073-.53-.22l-3.965-3.965c-.293-.293-.293-.768,0-1.061s.768-.293,1.061,0l3.965,3.965c.293,.293,.293,.768,0,1.061-.146,.146-.338,.22-.53,.22Z" fill="#f6f6f6"></path><path d="M7.75,13.5c-3.17,0-5.75-2.58-5.75-5.75S4.58,2,7.75,2s5.75,2.58,5.75,5.75-2.58,5.75-5.75,5.75Zm0-10c-2.343,0-4.25,1.907-4.25,4.25s1.907,4.25,4.25,4.25,4.25-1.907,4.25-4.25-1.907-4.25-4.25-4.25Z" fill="#f6f6f6"></path></g></svg>
                <input type="search" class="search-box" placeholder="Search...">
            </div>

            <div class="massage-person__massage">
                <div class="person-massage active">
                    <img src="{{ Vite::asset('resources/images/profile.jpg') }}" alt="profile" width="60" height="60">

                    <div class="massage-index__box">
                        <div class="massage-index">
                            <h3 class="massage-index__title">username</h3>
                            <p class="massage-index__text">user text massage</p>
                        </div>

                        <!-- <div class="massage-notification">
                            <p>2</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f6f6f6" class="bi bi-check2-all" viewBox="0 0 16 16"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/><path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/></svg>
                        </div> -->

                        <div class="massage-alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f6f6f6" class="bi bi-pin-angle-fill" viewBox="0 0 16 16"><path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a6 6 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707s.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a6 6 0 0 1 1.013.16l3.134-3.133a3 3 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146"/></svg>
                            <span class="massage-time">4m</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>