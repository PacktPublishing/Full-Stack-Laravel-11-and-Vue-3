<script setup>
import router from '@/router';

function goBack() {
    router.go(-1)
}
</script>

<template>
    <main>
        <section class="section">
            <div class="container">
                <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Book title">
                        </div>
                    </div>
                <div class="row columns is-multiline">
                    
                    <div class="field column is-4">
                        <label class="label">Author</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option selected disabled>Select author</option>
                                    <option>Fyodor Dostoevsky</option>
                                    <option>Leo Tolstoy</option>
                                    <option>Albert Camus</option>
                                    <option>Washington Irving</option>
                                    <option>Keigo Higashino</option>
                                </select>
                            </div>
                        </div>
                    </div>
    
                    <div class="field column is-4">
                        <label class="label">Genre</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option selected disabled>Select genre</option>
                                    <option>Classic</option>
                                    <option>Horror</option>
                                    <option>Detective</option>
                                </select>
                            </div>
                        </div>
                    </div>
    
                    <div class="field column is-4">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option selected disabled>Select status</option>
                                    <option>To Read</option>
                                    <option>Reading</option>
                                    <option>Read</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light" @click="goBack()">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>