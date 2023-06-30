<script setup>
// import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>
    <!-- <main> -->
    <!-- <TheWelcome /> -->
    <!-- </main> -->
    <section
        id="home"
        class="relative pt-[120px] pb-[110px] lg:pt-[150px] section bg-light-secondary dark:bg-dark-secondary"
    >
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div
                    class="content flex-1 flex flex-col items-center lg:items-start"
                >
                    <p class="text-lg text-accent text-md mb-4">
                        Hey,
                        <span
                            id="name-text"
                            class="text-lg text-accent text-md"
                        >
                        </span>
                    </p>
                </div>
            </div>

            <!-- <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                <p class="text-lg text-accent text-md mb-[22px]">
                        Hey, 
                        <span id="name-text" class="text-lg text-accent text-md mb-[22px]">
                            I'm Ahmed Hussain 
                        </span>
                    </p>
                    <p id="Stack" class="text-lg text-accent text-md mb-[22px]">
                        Full Stack Devoloper 
                    </p>
                    </div>
                </div> -->
            <div class="flex flex-col md:flex-row items-center h-full">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px] text-white"
                    >
                        I Build & Design <br />
                        Web Interfaces.
                    </h1>
                    <!-- <p
                        class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left text-white"
                    >
                        Lorem ipsum dolor sit amet consectetur adipisicing illo
                        ad labore dolor elit.
                    </p>
                    <button
                        class="btn-s btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all"
                    >
                        Work with me
                    </button> -->
                    <div class="pt-12">
                        <h5
                            class="text-lg flex justify-center lg:justify-start items-center text-white dark:text-white mb-3"
                        >
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <a
                                class="hover:bg-black cursor-pointer w-12 h-12 rounded-full flex items-center justify-center border text-black dark:text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-dark-secondary dark:hover:border-dark-secondary mr-3 sm:mr-4"
                                href="https://www.linkedin.com/in/ahmed-hussain-9b42b2246/"
                                target="_blank"
                            >
                                <svg
                                    width="14"
                                    height="14"
                                    viewBox="0 0 14 14"
                                    class="fill-current"
                                    style="color: white"
                                >
                                    <path
                                        d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                                    />
                                </svg>
                            </a>
                            <a
                                class="hover:bg-white cursor-pointer w-12 h-12 rounded-full flex items-center justify-center border text-black dark:text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-dark-secondary dark:hover:border-dark-secondary mr-3 sm:mr-4"
                                href="https://github.com/Ahmedhussain70"
                                target="_blank"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    class="fill-current"
                                    style="color: white"
                                >
                                    <path
                                        d="M12,2A10,10,0,0,0,8.84,21.5c.5.08.66-.23.66-.5V19.31C6.73,19.91,6.14,18,6.14,18A2.69,2.69,0,0,0,5,16.5c-.91-.62.07-.6.07-.6a2.1,2.1,0,0,1,1.53,1,2.15,2.15,0,0,0,2.91.83,2.16,2.16,0,0,1,.63-1.34C8,16.17,5.62,15.31,5.62,11.5a3.87,3.87,0,0,1,1-2.71,3.58,3.58,0,0,1,.1-2.64s.84-.27,2.75,1a9.63,9.63,0,0,1,5,0c1.91-1.29,2.75-1,2.75-1a3.58,3.58,0,0,1,.1,2.64,3.87,3.87,0,0,1,1,2.71c0,3.82-2.34,4.66-4.57,4.91a2.39,2.39,0,0,1,.69,1.85V21c0,.27.16.59.67.5A10,10,0,0,0,12,2Z"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0"
                >
                    <iframe
                        src="https://my.spline.design/clonercubesimplecopy-f23ac07b7f2560bf9ba1d7bcb66e8326/"
                        width="95%"
                        height="500px"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
#name-text {
    width: 0;
    font-family: monospace;
    margin-left: 10px;
    letter-spacing: 4px !important;
    overflow: hidden;
    /* border-right: 1px solid hsl(0, 0%, 80%); */
    white-space: nowrap;
    /* animation: typewriter 3s steps(40) 1s 1 normal both,
                    blinkTextCursor 1000ms infinite; */
}
.content p::after {
    content: "|";
    animation-name: typing;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}

a {
    border-color: rgb(2, 183, 255) !important;
}

a:hover {
    background-color: rgb(2, 183, 255);
}

iframe {
    padding-bottom: 150px;
  /* width: 76.92% !important; */
  /* height: 76.92% !important; */
  /* transform: scale(1.0); */
}

@keyframes typing {
    0% {
        content: "|";
    }
    3% {
        content: "I|";
    }
    6% {
        content: "I'm| ";
    }
    9% {
        content: "I'm Ah|";
    }
    12% {
        content: "I'm Ahm|";
    }
    15% {
        content: "I'm Ahme|";
    }
    18% {
        content: "I'm Ahmed|";
    }
    21% {
        content: "I'm Ahmed H|";
    }
    23% {
        content: "I'm Ahmed Hu|";
    }
    26% {
        content: "I'm Ahmed Hus|";
    }
    29% {
        content: "I'm Ahmed Huss|";
    }
    32% {
        content: "I'm Ahmed Hussa|";
    }
    34% {
        content: "I'm Ahmed Hussai|";
    }
    36% {
        content: "I'm Ahmed Hussain|";
    }
    39% {
        content: "I'm F|";
    }
    42% {
        content: "I'm Fu|";
    }
    45% {
        content: "I'm Ful|";
    }
    47% {
        content: "I'm Full|";
    }
    49% {
        content: "I'm Full S|";
    }
    52% {
        content: "I'm Full St|";
    }
    55% {
        content: "I'm Full Sta|";
    }
    58% {
        content: "I'm Full Stac|";
    }
    62% {
        content: "I'm Full Stack|";
    }
    66% {
        content: "I'm Full Stack d|";
    }
    70% {
        content: "I'm Full Stack de|";
    }
    74% {
        content: "I'm Full Stack dev|";
    }
    78% {
        content: "I'm Full Stack devo|";
    }
    82% {
        content: "I'm Full Stack devol|";
    }
    88% {
        content: "I'm Full Stack devolo|";
    }
    92% {
        content: "I'm Full Stack devolop|";
    }
    96% {
        content: "I'm Full Stack devolope|";
    }
    100% {
        content: "I'm Full Stack devoloper|";
    }
}
</style>
