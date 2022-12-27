<template>
    <qrcode-vue :value="value" :size="size" level="H" />
</template>

<script setup>
    import QrcodeVue from 'qrcode.vue'

    import { ref, onMounted, reactive, onBeforeMount } from 'vue'

    const props = defineProps({
        info: Object
    })

    const size = ref(300)
    // const value = ref("wassup")
    let value = reactive(JSON.stringify(props.info))
    onBeforeMount(()=>{
        value = props.info       
    })
</script>

