<style scoped lang="scss">
    #hash-tag-instagram {
        a:focus, a:active {
            text-decoration: none;
        }
    }

</style>
<template>
    <div id="instagram">
        <div class="container">
            <!-- Block Title END -->
            <!--<vue-instagram token="253093357.6090697.0d9124a6373243c6aac109953ff8fa6e" :tags="['hashtag1', 'hashtag2']" username="delightfulll" :count="6">-->
            <vue-instagram token="253093357.6090697.0d9124a6373243c6aac109953ff8fa6e" username="delightfulll" :count="6">
                <template slot="feeds" slot-scope="props">
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6" style="padding: 2px;">
                                    <!-- Insta Tile -->
                                    <div class="tile tile-insta">
                                        <a :href=props.feed.link target="_blank" class="preview-box">
                                            <img style="width: 100%" :src= props.feed.images.standard_resolution.url>
                                        </a>
                                    </div>
                                    <!-- Insta Tile END -->
                                </div>
                </template>
                <template slot="error" slot-scope="props">
                    <div class="fancy-alert"> {{ props.error.error_message }} </div>
                </template>
            </vue-instagram>
        </div>
    </div>
</template>

<script>
    import VueInstagram from 'vue-instagram'

    export default {
        components: {
            'vue-instagram': VueInstagram
        },
    }
</script>
