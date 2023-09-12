<!-- resources/views/livewire/main/let-started/lets-started-component.blade.php -->


<style>

.let_started_area{
	padding-bottom: 19.6rem;
	padding-top: 13.5rem;
	background: -o-linear-gradient(330deg, rgba(249,240,130,1) 0%, rgba(239,237,134,1) 16%, rgba(214,232,147,1) 36%, rgba(172,222,168,1) 60%, rgba(114,209,197,1) 82%, rgba(42,193,233,1) 100%);
	background: linear-gradient(120deg, rgba(249,240,130,1) 0%, rgba(239,237,134,1) 16%, rgba(214,232,147,1) 36%, rgba(172,222,168,1) 60%, rgba(114,209,197,1) 82%, rgba(42,193,233,1) 100%);
}
.let_started_area h2{
	font-size: 6rem;
	font-weight: 600;
	line-height: 1;
	color: #000;
	padding-bottom: .3rem;
}
.let_started_area p{
	font-size: 1.8rem;
	color:#000;

}
.let_started_left h3{
	font-size: 2.7rem;
	color: #000;
	line-height: 1.2;
	font-weight: 600;
}
.let_started_left h3 span{
	position: relative;
}
.let_started_left h3 span::before{
	content: '';
    position: absolute;
    height: 0.5rem;
    width: 200rem;
    top: 58%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    right: 110%;
    background-color: #000;
}
.let_started_right h3{
	font-size: 2.7rem;
	color: #000;
	line-height: 1.2;
	font-weight: 600;
}
.let_started_right h3 span{
	position: relative;
}
.let_started_right h3 span::before{
	content: '';
    position: absolute;
    height: 0.5rem;
    width: 200rem;
    top: 58%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    left: 110%;
    background-color: #000;
}
.lets_button{
	display: inline-block;
    font-size: 1.6rem;
    line-height: 1.2;
    color: #000;
    background-color: #F9F082;
    padding: 0.5rem 1.4rem;
    letter-spacing: 0.2rem;
    font-weight: 400;
    border-bottom: 0.2rem solid #000;
    border-right: 0.2rem solid #000;
    min-width: 12rem;
    text-align: center;
}
.lets_button:hover {
    background-color: #000 !important;
    color: #fff;
    border-color: #FFC466;
}
.lets-line{
    width: 3.3rem;
    height: 0.1rem;
    background-color: #000;
}
.new_button_area{
	display:-webkit-box;
	display:-ms-flexbox;
	display:flex;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	-webkit-column-gap: .5rem;
	   -moz-column-gap: .5rem;
	        column-gap: .5rem;
}
.lets_button.lets_button_two{
	background-color: #FFC466;
}


</style>


<!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->


        <main>
            <div class="let_started_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Lets get Started</h2>
                            <p>First, tell us what you're looking for.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="let_started_left text-end">
                                <h3 class="mt_25">I'm looking</h3>
                                <h3><span>for work</span></h3>
                                <p class="mt_25 mb_25">Find great freelance and part-time <br> work with amazing companies.</p>
                                <div class="new_button_area d-flex justify-content-end">
                                    <div class="lets-line"></div>
                                    <!-- <a href="#" class="lets_button lets_button_two">HIRE</a> -->


                     @guest
                    <a href="{{ url('auth/register') }}" class="py-2 px-4 text-primary-600 hover:text-primary-800 transition-colors duration-300 rounded-full hidden md:inline-block dark:text-gray-100 dark:hover:text-white">
                        @lang('messages.t_join')
                    </a>
                @endguest
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="let_started_right">
                                <h3 class="mt_25">I want to hire</h3>
                                <h3><span>an expert</span></h3>
                                <p class="mt_25 mb_25">Find and collaborate <br> with a specialist in their field.</p>
                                <div class="new_button_area">
                                    <a href="#" class="lets_button">HIRE</a>
                                    <div class="lets-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

