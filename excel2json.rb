# encoding: UTF-8
puts `clear`

require 'rubygems'
require 'cocaine'
require 'json'

ROOT_PATH      = File.dirname File.absolute_path(__FILE__)

SRC_EXCEL_PATH = ROOT_PATH + "/files/excel_import.xlsx"
READER_SCRIPT  = ROOT_PATH + "/excel2json.php"
TMP_DATA_PATH  = ROOT_PATH + "/files/tmp.json"

line = Cocaine::CommandLine.new(READER_SCRIPT, ":src_file :tmp_file")

begin
  json = line.run(
    src_file: SRC_EXCEL_PATH,
    tmp_file: TMP_DATA_PATH
  )
rescue => e
  puts e.message
end