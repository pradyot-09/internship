# app-assets

This folder contains all resources of **Modern Template** required for website. i.e. css files, images, javascript files, third party libraries like jquery etc. Currently there are many files which are not require for our website, so we should remove all un-necessary files from this folder and clean folder before it goes to production. This folder can also include other static assests that are not part of **Modern Template**, but required for our website, like images, third party library etc.

###### NOTE
DO **NOT** edit any files in this folder. Cause mostly all files are third party files, which should be never modified, as it gets replaced/updated on every new version of third party software. But in case if you want to change any settings in these files, create new file and override setting instead of maing changes in existing file.

###### USECASE
You never need to modify any files within this folder. You either want to delete any file/folder or add new file/folder. If you want to add new image or dependecy of new library, you can save that image/library 
in this folder.
If you remove any files from this folder, please do not forget to remove path to this file from php/html files, otherwise it will throw error in frontend and might break existing behaviour.

After adding file here, you can give path to that file wherever you want to use it.

suppose new image *app-assets/images/logo/vlab_logo.png* is added to folder, you can use this path(*app-assets/images/logo/vlab_logo.png*) to give reference to newly added image.
