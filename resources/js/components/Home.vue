<template>
    <div>
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1><em class="text-danger">Gift Card</em> Drag&Drop </h1>
                <h1><em class="text-primary">Google Fonts </em> API</h1>
                <h1><em class="text-success">Vue JS</em> Laravel 8</h1>
            </div>

            <form action="#" method="post" @submit.prevent="submitHandler">

                <!-- Upload Image -->
                <div class="card card-section my-5 pb-5">
                    <h2 class="text-center text-white mb-4">Pick Your Image</h2>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="w-25 mx-4">
                            <input class="form-control" type="file" @change="uploadFile" name="google-font-file"
                                   id="google-font-file">
                        </div>
                    </div>
                </div>

                <!-- Store Name -->
                <div class="card card-section my-5">
                    <h2 class="text-center text-white">Store Name Element</h2>
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="w-25 mx-4">
                            <label for="google-font-name" class="form-label">Font Name</label>
                            <select id="google-font-name" class="form-control form-select my-2" v-model="el_name">
                                <option selected>{{ el_name }}</option>
                                <option v-for="(font, i) in fonts"
                                        :key="i"
                                        :value="font">
                                    {{ font }}
                                </option>
                            </select>
                        </div>
                        <div class="w-25 mx-4">
                            <label class="form-label" for="google-font-size">Font Size</label>
                            <input class="form-control" type="number" name="google-font-size"
                                   id="google-font-size" v-model="el_size">
                        </div>
                        <div class="w-25 mx-4">
                            <label class="form-label" for="google-font-color">Font Color</label>
                            <input class="form-control" style="height: 40px;" type="color" id="google-font-color"
                                   name="google-font-color" v-model="el_color">
                        </div>
                    </div>
                </div>

                <!-- Card Amount -->
                <div class="card card-section my-5">
                    <h2 class="text-center text-white">Gift Card Amount Element</h2>
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="w-25 mx-4">
                            <label for="google-font-name" class="form-label">Font Name</label>
                            <select id="google-font-name" class="form-control form-select my-2" v-model="am_name">
                                <option selected>{{ am_name }}</option>
                                <option v-for="(font, i) in fonts"
                                        :key="i"
                                        :value="font">
                                    {{ font }}
                                </option>
                            </select>
                        </div>
                        <div class="w-25 mx-4">
                            <label class="form-label" for="google-font-size">Font Size</label>
                            <input class="form-control" type="number" name="google-font-size"
                                   id="google-font-size" v-model="am_size">
                        </div>
                        <div class="w-25 mx-4">
                            <label class="form-label" for="google-font-color">Font Color</label>
                            <input class="form-control" style="height: 40px;" type="color" id="google-font-color"
                                   name="google-font-color" v-model="am_color">
                        </div>
                    </div>
                </div>

                <!-- Card Code -->
                <div class="card card-section my-5">
                    <h2 class="text-center text-white">Gift Card Code Element</h2>
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="w-25 mx-4">
                            <label for="google-font-name" class="form-label">Font Name</label>
                            <select id="google-font-name" class="form-control form-select my-2" v-model="code_name">
                                <option selected>{{ code_name }}</option>
                                <option v-for="(font, i) in fonts"
                                        :key="i"
                                        :value="font">
                                    {{ font }}
                                </option>
                            </select>
                        </div>
                        <div class="w-25 mx-4">
                            <label class="form-label" for="google-font-size">Font Size</label>
                            <input class="form-control" type="number" name="google-font-size"
                                   id="google-font-size" v-model="code_size">
                        </div>
                        <div class="w-25 mx-4">
                            <label class="form-label" for="google-font-color">Font Color</label>
                            <input class="form-control" style="height: 40px;" type="color" id="google-font-color"
                                   name="google-font-color" v-model="code_color">
                        </div>
                    </div>
                </div>


                <!-- Place to show picture -->
                <div class="" id="photo_insert">

                    <!-- <img src="/img/merry-christmas.webp" alt="Merry Christmas" class="img-fluid">-->
                    <img src="/img/merry-christmas.webp" alt="Merry Christmas"
                         class="img-fluid w-100 h-100" id="preview_photo">
                    <!-- Test Blocks -->
                    <div class="" id="text_list">


                        <!-- Store Name Block -->
                        <div class="text-center gift-text"
                             id="el_text"
                             :style="{
                    'font-family': el_name + ', sans-serif',
                    'font-size': el_size + 'px',
                    'cursor': 'move',

                    'color': el_color }
                      ">
                            {{ elText }}
                            {{ elFonts }}
                        </div>

                        <!-- Amount Block -->
                        <div class="text-center gift-text"
                             id="am_text"
                             :style="{
                    'font-family': am_name + ', sans-serif',
                    'font-size': am_size + 'px',
                    'cursor': 'move',

                    'color': am_color }
                      ">
                            {{ amText }}
                            {{ amFonts }}
                        </div>

                        <!-- Code Block -->
                        <div class="text-center gift-text"
                             id="code_text"
                             :style="{
                    'font-family': code_name + ', sans-serif',
                    'font-size': code_size + 'px',
                    'cursor': 'move',

                    'color': code_color }
                      ">
                            {{ codeText }}
                            {{ codeFonts }}
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-outline-primary my-5 mx-2">Upload & Save Card</button>
                <div class="btn btn-outline-success my-5 mx-2" @click="alignHCenter">Align Horizontal</div>
                <div class="btn btn-outline-success my-5 mx-2" @click="alignDefault">Align Default</div>
            </form>

            <!-- Dummy Text -->
            <div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto at consequatur
                    earum
                    eligendi excepturi iure iusto laboriosam non officia, porro quas quis quo repellat repellendus
                    repudiandae, tempore vitae voluptates.
                </div>
                <div>Alias at commodi, consequuntur culpa doloribus enim eveniet id laboriosam minima quae quia quos?
                    Doloremque, doloribus eaque est in libero mollitia neque nulla odio qui repellendus, sed sint soluta
                    tenetur?
                </div>
                <div>Adipisci alias consequuntur cum deleniti, doloribus eaque excepturi fugit hic, incidunt laudantium
                    magni nam neque perferendis quas qui totam voluptatibus. Consequatur laudantium quia sit? A
                    accusamus
                    dolorum mollitia similique sint.
                </div>
                <div>A animi consequuntur cumque, cupiditate delectus dicta dolores earum eligendi error eum labore
                    laborum
                    laudantium maiores maxime mollitia nihil obcaecati optio perferendis perspiciatis provident quos
                    sequi
                    voluptates voluptatum! Nihil, soluta.
                </div>
                <div>Ad cumque cupiditate dolor, eaque hic id illo ipsum iusto libero magni maiores natus, neque
                    quisquam
                    repellat, ut velit voluptate. Accusantium ea enim molestiae neque nisi quis recusandae ut
                    voluptatum!
                </div>
                <div>Asperiores culpa ducimus molestias rem velit! Ab adipisci atque, commodi consectetur corporis
                    dolorem
                    eos facere fuga fugiat impedit ipsa ipsam modi molestias nam nesciunt nulla officiis porro
                    temporibus
                    totam voluptas!
                </div>
                <div>Explicabo libero, natus obcaecati porro quos velit veritatis voluptate voluptates. Accusamus alias
                    ipsam magni nam quisquam saepe sit suscipit tenetur veniam vero. Asperiores cumque distinctio ex
                    facere
                    molestias neque porro?
                </div>
                <div>Architecto, aut dolores ducimus eligendi ex, minima modi nam necessitatibus nesciunt officiis omnis
                    placeat quis. Aliquid at corporis cumque debitis, dolorem explicabo inventore maxime possimus,
                    quaerat
                    qui ratione temporibus vitae.
                </div>
                <div>Delectus deleniti dicta, dolores ea, earum enim eveniet ex excepturi facere illo in iure nihil non
                    numquam perferendis provident quam qui quibusdam quod reprehenderit repudiandae sequi sunt ut velit
                    veritatis.
                </div>
                <div>A, ad architecto doloribus error est facilis harum libero numquam obcaecati possimus, quia sint
                    temporibus totam. Cupiditate doloremque dolores ea fugit, neque, placeat quas quo sed sit soluta
                    voluptatem voluptatum?
                </div>
                <div>At commodi consectetur est exercitationem explicabo fuga fugiat harum id, illo illum officia quod,
                    sed
                    tenetur. Aut dolorem esse ex id laudantium magni nisi quaerat, sapiente? Ab facilis inventore non?
                </div>
                <div>Ad aut debitis dicta dignissimos earum nam officia quas sapiente vel? Asperiores cumque dignissimos
                    doloremque, eius exercitationem fugit impedit laborum, maxime quae quidem temporibus totam!
                    Doloribus
                    illum natus perferendis voluptates!
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Home",
    data() {
        return {
            fonts: [],

            el_name: 'Roboto',
            el_size: '36',
            el_color: '#18cd36',

            am_name: 'Comfortaa',
            am_size: '56',
            am_color: '#6ca2ea',

            code_name: 'Verdana',
            code_size: '36',
            code_color: '#b0b0b0',

            elText: 'Your Store Name',
            amText: '$300',
            codeText: 'DEX9-1K89-83JW-O78W',
            image: null,
            image_title: '',
            dragVal: ''
        }
    },
    mounted() {
        this.getFonts();
        this.dragDrop();
    },
    computed: {
        elFonts() {
            let el = document.querySelector('head');
            el.insertAdjacentHTML("beforeend", `<style>
            @import url("https://fonts.googleapis.com/css2?family=${this.el_name}&display=swap");
            </style>`);
        },
        amFonts() {
            let el = document.querySelector('head');
            el.insertAdjacentHTML("beforeend", `<style>
            @import url("https://fonts.googleapis.com/css2?family=${this.am_name}&display=swap");
            </style>`);
        },
        codeFonts() {
            let el = document.querySelector('head');
            el.insertAdjacentHTML("beforeend", `<style>
            @import url("https://fonts.googleapis.com/css2?family=${this.code_name}&display=swap");
            </style>`);
        }
    },
    methods: {
        async getFonts() {
            try {
                let url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyD6BIVLuEx3Aa9oK5zUAz--PdYyGhbGgRY';
                let res = await axios.get(url)
                    .then(res => {
                        let data = res.data.items
                        for (let item of data) {
                            this.fonts.push(item.family)
                        }
                    })
            } catch (e) {
                throw e
            }
        },
        dragDrop(e) {
            document.ondragstart = function () {
                return false;
            };

            let photo_insert = document.getElementById('photo_insert');
            let text_list = document.getElementById('text_list');
            let elms = document.querySelectorAll('.gift-text');

            let m = 0;
            for (let i = 0; i < elms.length; i++) {
                m++;
                elms[i].style.left = 0;
                elms[0].style.top = '10%';
                if (i < m && i > 0) {
                    elms[i].style.top = ((i * 20) * 2) + '%';
                }
                elms[i].style.position = 'absolute';
                elms[i].style.width = '100%';

            }

            let dragVal,
                shiftX,
                shiftY,
                width,
                height;

            text_list.onmousedown = function (e) {

                if (!e.target.classList.contains('gift-text')) return;
                dragVal = e.target;
                dragVal.style.position = 'absolute';
                dragVal.style.width = '100%';
                dragVal.style.zIndex = 1;

                shiftX = e.clientX - dragVal.getBoundingClientRect().left;
                shiftY = e.clientY - dragVal.getBoundingClientRect().top;
                width = dragVal.getBoundingClientRect().width;
                height = dragVal.getBoundingClientRect().height;
            }

            document.onmousemove = function (e) {
                if (!dragVal || dragVal == null) return;

                dragVal.style.left = (e.clientX - width / 2) - 302 + 'px';
                if (pageYOffset > photo_insert.offsetTop) {
                    dragVal.style.top = (e.clientY - shiftY) - (photo_insert.offsetTop - pageYOffset) + 'px';
                } else {
                    dragVal.style.top = (e.clientY - shiftY) - (photo_insert.offsetTop - pageYOffset) + 'px';
                }
            }

            document.onmouseup = function (e) {
                if (!dragVal || dragVal == null) return;
                dragVal = null;
            }
        },
        alignHCenter() {
            let elms = document.querySelectorAll('.gift-text');
            for (let i = 0; i < elms.length; i++) {
                elms[i].style.left = 0;
            }
        },
        alignDefault() {
            let elms = document.querySelectorAll('.gift-text');
            let m = 0;
            for (let i = 0; i < elms.length; i++) {
                m++;
                elms[i].style.left = 0;
                elms[0].style.top = '10%';
                if (i < m && i > 0) {
                    elms[i].style.top = ((i * 20) * 2) + '%';
                    //console.log((m * 10) * 2);
                }
                elms[i].style.position = 'absolute';
                elms[i].style.width = '100%';

            }
        },
        uploadFile(e) {
            e.preventDefault();

            this.image = e.target.files[0];
            this.image_title = e.target.files[0].name;

            let reader = new FileReader();
            reader.readAsDataURL(this.image);
            reader.onload = () => {

                let temp_img = document.querySelector('#preview_photo');
                temp_img.src = reader.result;
                temp_img.alt = this.image_title;
            }
        },
        async submitHandler() {
            let el_text = document.getElementById('el_text');
            let am_text = document.getElementById('am_text');
            let code_text = document.getElementById('code_text');

            let elementStyle = getComputedStyle(el_text);
            let amountStyle = getComputedStyle(am_text);
            let codeStyle = getComputedStyle(code_text);

            let formData = new FormData();
            formData.append('image', this.image);

            formData.append('el_text_font_name', elementStyle.fontFamily);
            formData.append('el_text_font_size', elementStyle.fontSize);
            formData.append('el_text_font_color', elementStyle.color);
            formData.append('el_text_position_x', elementStyle.left);
            formData.append('el_text_position_y', elementStyle.top);

            formData.append('am_text_font_name', amountStyle.fontFamily);
            formData.append('am_text_font_size', amountStyle.fontSize);
            formData.append('am_text_font_color', amountStyle.color);
            formData.append('am_text_position_x', amountStyle.left);
            formData.append('am_text_position_y', amountStyle.top);

            formData.append('code_text_font_name', codeStyle.fontFamily);
            formData.append('code_text_font_size', codeStyle.fontSize);
            formData.append('code_text_font_color', codeStyle.color);
            formData.append('code_text_position_x', codeStyle.left);
            formData.append('code_text_position_y', codeStyle.top);

            await axios.post('/api/gift/store', formData)
                .then(response => {
                    let result = response.data;
                })


        }
    }
}
</script>

<style scoped lang="scss">
.selected {
    opacity: 0.6;
}

#photo_insert {
    position: relative;

}

#text_list {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
}

.before_edit {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}


</style>
