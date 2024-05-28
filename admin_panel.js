document.addEventListener("DOMContentLoaded", () => {
    const postData = {
        title: '',
        desctiption: '',
        authorName: '',
        authorPhoto: '',
        postPhoto: '',
    }

    const postForm = document.getElementById('post-form');
    const titleInput = document.getElementById('title-input');
    const descriptionInput = document.getElementById('description-input');
    const authorNameInput = document.getElementById('author-name-input');
    const authorPhotoInput = document.getElementById('author-photo-input');
    const postPhotoInput = document.getElementById('post-photo-input');

    function onTitleInputChange (event) {
        postData.title = event.target.value

        invalidatePostPreview()
    }

    function onDescriptionInputChange (event) {
        postData.description = event.target.value
        
        invalidatePostPreview()
    }

    function onAuthorNameInputChange (event) {
        postData.authorName = event.target.value

        invalidatePostPreview()
    }

    function onAuthorPhotoInputChange (event) {
        const file = event.target.files[0]
        readFileAsBase64(file, (result) => {
            console.log(result)
            postData.authorPhoto = result

            invalidatePostPreview()
        })
    }

    async function onPostPhotoInputSubmit (event) {
        const file = event.target.files[0]
        const base64Image = await asyncReadFileAsBase64(file)

        postData.postPhoto = base64Image

        invalidatePostPreview()
    }

    function initEventListeners() {
        onPostFormSubmit.addEventListener('submit', onPostFormSubmit)
        titleInput.addEventListener('input', onPostTitleSubmit)
        descriptionInput.addEventListener('input', onPostDescriptionSubmit)
        authorNameInput.addEventListener('input', onPostAuthorNameSubmit)
        authorPhotoInput.addEventListener('change', onPostAuthorPhotoSubmit)
        postPhotoInput.addEventListener('change', onPostPhotoInputSubmit)
    }


    titleInput = document.getElementById('title-input');
    descriptionInput = document.getElementById('description-input');

    titleInput.addEventListener('input', (event) => {
        postData.title = event.target.value

        invalidatePostPreview()
    })

    descriptionInput.addEventListener('input', (event) => {
        postData.title = event.target.value

        invalidatePostPreview()
    })

    function invalidatePostPreview() {
        const postPreviewTitle = document.getElementById('post-preview-title')
        postPreviewTitle.innerText = postData.value

        console.log('postPreviewTitle', postPreviewTitle)
    }

    function onPostFormSubmit(event) {
        event.preventDefault()

        const invalidData = postData.authorName.trim().length
        && postData.authorPhoto.trim().length
        && postData.postPhoto.trim().length
        && postData.title.trim().length
        && postData.description.trim().length

        if (!invalidData) {
            alert('Введите все данные корректно')
            return
        }

        console.log('postData', postData)
    }
});