var fs = require("fs");
var archiver = require("archiver");

var output = fs.createWriteStream("pmsite-docs.zip");
var archive = archiver("zip");

console.log("Zipping!");
output.on("close", function () {
	console.log("Zipped!");
	console.log(archive.pointer() + " total bytes");
});

archive.on("error", function (err) {
	throw err;
});

archive.pipe(output);

["admin", "php", "inc", "blocks", "vendor", "build"].forEach((dir) => {
	if (fs.existsSync(`${__dirname}/${dir}`)) {
		archive.directory(`${dir}/`, dir);
	}
});

["pmsite-docs.php", "readme.txt"].forEach((name) => {
	archive.append(fs.createReadStream(`${__dirname}/${name}`), {
		name,
	});
});

archive.directory("build", "/build");

archive.finalize();
