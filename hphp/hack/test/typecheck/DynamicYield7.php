<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

trait DynamicYield {
  public function __call(string $name, array $args = array()) {
  }
}

class Foo {
  use DynamicYield;

  public async function yieldInt() {
    return 123;
  }
}

function bar(): string {
  return (new Foo())->genInt();
}
