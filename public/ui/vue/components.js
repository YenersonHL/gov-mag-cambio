Vue.component('app-markdown', {
    props: {
        markdown: {
            type: String,
            default: '# hello, markdown!'
        }
    },
    template: `
    <div class="app-markdown" v-html="htmlmarkdown"></div>
    `,
    computed: {
        htmlmarkdown(){
            let converter = new showdown.Converter({
                tables: true,
                noHeaderId: true,
                parseImgDimensions: true,
                simplifiedAutoLink: true,
                tasklists: true
            });
            return converter.makeHtml(this.markdown);
        }
    }
})