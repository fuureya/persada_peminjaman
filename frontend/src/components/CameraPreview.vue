<template>
    <div v-if="image" class="flex justify-center">
        <img :src="image" :alt="'gambar preview'" id="preview">
    </div>
    <div v-if="image == ''" class="flex justify-center">
        <WebCamUI :fullscreenState="false" @photoTaken="photoTaken" />
    </div>
</template>

<style scoped>
#webcam-ui {
    width: 50%;
}

#preview {
    margin-bottom: 20px;
    width: 50%;
}
</style>
<script>
import { ref } from 'vue';
import { WebCamUI } from 'vue-camera-lib'

export default {
    components: {
        WebCamUI,
    },
    props: {
        autoStart: {
            type: Boolean,
            default: true
        },

    },
    methods: {
        photoTaken(data) {

            // console.log('image blob: ', data.blob)
            console.log('image blob: ', data)
            // console.log('image data url', data.image_data_url)

            this.image = data.image_data_url;

        },
    },
    setup() {
        return {
            image: ref('')
        }
    }
}

</script>