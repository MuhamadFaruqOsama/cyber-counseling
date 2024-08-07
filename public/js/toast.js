const alertToast = (status, msg) => {
    if(status == "error") {
        iziToast.error({
            title: "Error",
            message: `${msg}`,
            position: 'topRight',
            icon: 'fa-solid fa-ban'
        });
    } else {
        iziToast.success({
            title: 'Success',
            message: `${msg}`,
            position: 'topRight',
            icon: 'fa-solid fa-check'
        });
    }
}