require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/Welcome'
import Info from './components/Info'
import QRReader from './components/QRReader'
import QrcodeReaderVue3 from "qrcode-reader-vue3";

// import VueQrcodeReader from "vue-qrcode-reader";

const app = createApp({})

app.use(QrcodeReaderVue3)

app.component('welcome', Welcome)
app.component('qr-info', Info)
app.component('qr-reader', QRReader)

app.mount('#app')